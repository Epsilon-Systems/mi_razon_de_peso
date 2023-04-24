<?php
/**
 * @package         Regular Labs Library
 * @version         23.3.25449
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://regularlabs.com
 * @copyright       Copyright © 2023 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

namespace RegularLabs\Library\Form\Field;

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper as JHtml;
use Joomla\CMS\Language\Text as JText;
use RegularLabs\Library\ArrayHelper as RL_Array;
use RegularLabs\Library\DB as RL_DB;
use RegularLabs\Library\Form\Form;
use RegularLabs\Library\Form\FormField as RL_FormField;

class FieldField extends RL_FormField
{
    static      $fields;
    public bool $is_select_list = true;

    function getNameById($value, $attributes)
    {
        return RL_Array::implode($this->getNamesByIds([$value], $attributes));
    }

    function getNamesByIds($values, $attributes)
    {
        $db    = RL_DB::get();
        $query = RL_DB::getQuery()
            ->select('DISTINCT a.id, a.type, a.title as name')
            ->from('#__fields AS a')
            ->where('a.state = 1')
            ->where(RL_DB::is('a.id', $values))
            ->order('a.title');

        $db->setQuery($query);
        $fields = $db->loadObjectList();

        return Form::getNamesWithExtras($fields, ['type']);
    }

    function getOptions()
    {
        $fields = $this->getFields();

        $options = [];

        $options[] = JHtml::_('select.option', '', '- ' . JText::_('RL_SELECT_FIELD') . ' -');

        foreach ($fields as $field)
        {
            $key       = $field->{$this->get('key', 'id')} ?? $field->id;
            $options[] = JHtml::_('select.option', $key, ($field->title . ' [' . $field->type . ']'));
        }

        if ($this->get('show_custom'))
        {
            $options[] = JHtml::_('select.option', 'custom', '- ' . JText::_('RL_CUSTOM') . ' -');
        }

        return $options;
    }

    private function getFields()
    {
        if ( ! is_null(self::$fields))
        {
            return self::$fields;
        }

        $db    = RL_DB::get();
        $query = RL_DB::getQuery()
            ->select('DISTINCT a.id, a.type, a.name, a.title')
            ->from('#__fields AS a')
            ->where('a.state = 1')
            ->where('a.only_use_in_subform = 0')
            ->where(RL_DB::isNot('a.type', ['subform', 'repeatable']))
            ->order('a.title');

        $db->setQuery($query);

        self::$fields = $db->loadObjectList();

        return self::$fields;
    }
}
