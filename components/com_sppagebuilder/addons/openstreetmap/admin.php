<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http: //www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2023 JoomShaper
 * @license http: //www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;

SpAddonsConfig::addonConfig([
	'type'       => 'content',
	'addon_name' => 'openstreetmap',
	'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP'),
	'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_DESC'),
	'category'   => 'General',
	'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.3 12.125c-.232-2.793.475-5.33 2.202-7.567.327-.43.691-.823 1.077-1.195.503-.485 1.042-.935 1.582-1.387l.087-.072c-.297-.172-.61-.285-.919-.397-.378-.137-.749-.271-1.074-.507h-.348c-.756.3-1.546.493-2.336.686-.432.105-.864.21-1.29.334-.98.28-1.97.53-2.96.78-.404.102-.809.205-1.213.31l-.024.005c-.175.044-.332.084-.532.017a649.995 649.995 0 00-4.106-1.341l-.089-.029-2.097-.68c-.026 0-.039-.026-.053-.052A.339.339 0 00.19 1H.074l.021.063.087.258.008.027.07.208.07.213.538 1.613c.422 1.262.847 2.525 1.28 3.783.128.36.14.684.012 1.054-.313.91-.617 1.82-.921 2.73-.304.91-.608 1.819-.921 2.729-.116.37-.116.695 0 1.066.231.73.457 1.46.684 2.193.363 1.174.726 2.349 1.112 3.52.127.405.116.764 0 1.17a776.683 776.683 0 00-2.005 6.918c-.011.035-.027.07-.044.105-.048.106-.098.214-.037.335.209.44 1.298.719 1.68.406a8.165 8.165 0 00.319-.278c.233-.213.455-.436.678-.66l.139-.14c1.17-1.176 2.344-2.349 3.517-3.522 1.173-1.174 2.347-2.347 3.517-3.523.417-.417.88-.73 1.483-.556.533.15.939-.012 1.321-.337.117-.095.23-.195.344-.295.203-.18.407-.36.63-.516.278-.197.278-.37.127-.66-.355-.693-.704-1.395-1.053-2.099-.3-.603-.6-1.207-.905-1.806-.174-.348-.29-.73.023-1.009.569-.512.515-1.132.459-1.787a18.783 18.783 0 01-.007-.078zm-1.963.549a5.334 5.334 0 00-.01-.138l-.012-.153-.008-.09v-.003c-.258-3.108.487-6.005 2.316-8.558-.268.067-.525.133-.788.21h-.005c-1.01.29-2.048.552-3.049.805-.398.1-.79.2-1.172.298l-.008.002-.007.002-.03.008c-.174.048-.857.234-1.643-.027-.896-.297-1.79-.59-2.686-.88.265.787.532 1.572.802 2.356.264.75.299 1.538.015 2.364-.31.9-.612 1.802-.916 2.713l-.002.004c-.29.87-.584 1.748-.886 2.627.232.734.454 1.452.674 2.162.358 1.157.71 2.296 1.092 3.455l.004.013.004.013c.261.832.222 1.595.015 2.32l-.003.009-.003.01c-.292.987-.581 1.976-.868 2.965l1.782-1.783.002-.002a2033.18 2033.18 0 003.513-3.519l.004-.003c.465-.466 1.498-1.366 2.968-1.167l-.51-1.025c-.305-.614-.605-1.218-.88-1.756l-.003-.007-.003-.006c-.116-.231-.339-.707-.378-1.292a2.555 2.555 0 01.679-1.927zM30.494 23.273v-.002l-.158-1.294c-.067-.548-.134-1.1-.205-1.662l-.002-.02-.064-.51-.06.026a.914.914 0 00-.172.09c-.536.384-1.083.723-1.643 1.012-2.067 1.069-4.3 1.468-6.735 1.085a.859.859 0 00-.823.324c-.394.487-.834.464-1.333.209-.564-.286-1.128-.561-1.692-.837l-.845-.415-.029-.014c-1.432-.704-1.439-.707-2.475.536l-.046.055c-.287.34-.572.678-.44 1.173.197.742-.14 1.252-.626 1.738A2414.87 2414.87 0 007.9 29.97l-.607.606-.008.007v.001l-.095.095-.29.29c-.037.036-.084.071-.133.108-.137.102-.28.21-.203.355.085.17.237.118.394.065.078-.027.158-.054.232-.054a.342.342 0 00.156-.028l.057-.023c.036-.015.073-.03.111-.041l1.006-.287 1.362-.386.198-.056c1.34-.38 2.68-.76 4.016-1.149a1.838 1.838 0 011.17.035c1.088.394 2.18.784 3.272 1.174.806.287 1.612.575 2.418.866.302.115.58.127.881.011l1.602-.618c1.274-.493 2.55-.986 3.833-1.468.313-.116.51-.301.649-.602.483-1.03.971-2.055 1.458-3.078.33-.694.66-1.386.987-2.08l.025-.049c.063-.12.123-.238.103-.39zM13.024 27.7l.513-.15.01-.002a3.836 3.836 0 012.385.072l.008.003.007.002c1.088.394 2.169.78 3.256 1.168.73.26 1.462.522 2.2.788l1.306-.504c1.173-.454 2.357-.911 3.543-1.359.439-.931.883-1.866 1.325-2.795l.878-1.848-.008-.066a12.588 12.588 0 01-6.726 1.042 2.802 2.802 0 01-1.508.642c-.773.08-1.417-.174-1.82-.38-.551-.28-1.091-.543-1.646-.814-.285-.14-.573-.28-.87-.427l-.027-.013-.027-.013-.015.018a3.38 3.38 0 01-.254 1.716c-.27.63-.688 1.094-.994 1.4l-.008.008-1.528 1.512z" fill="currentColor"/><circle opacity=".5" cx="24.5" cy="10.5" r="7.5" fill="currentColor"/></svg>',
	'inline'     => [
		'buttons' => [
			'openstreetmap_general_options' => [
				'action'   => 'dropdown',
				'icon'     => 'addon::openstreetmap',
				'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP'),
				'fieldset' => [
					'tab_groups' => [
						'map' => [
							'fields' => [
								[
									'height' => [
										'type'        => 'slider',
										'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_HEIGHT'),
										'desc'        => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_HEIGHT_DESC'),
										'placeholder' => '400',
										'std'         => ['xl' => 400],
										'max'         => 2000,
										'responsive'  => true,
									],

									'map_style' => [
										'type'   => 'select',
										'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_STYLE'),
										'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_DESC'),
										'values' => [
											'Stamen.TonerLite'               => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_LITE'),
											'Stamen.Toner'                   => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_TONER'),
											'Stamen.TonerHybrid'             => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_HYBRID'),
											'Stamen.Terrain'                 => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_TERRAIN'),
											'CartoDB.Positron'               => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_LIGHT_ALL'),
											'CartoDB.DarkMatter'             => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_DARK_ALL'),
											'Esri.DeLorme'                   => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_DELORME'),
											'Hydda.Full'                     => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_HYDDA_FULL'),
											'Wikimedia'                      => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_WIKIMEDIA'),
											'CartoDB.Voyager'                => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_VOYAGER'),
											'Esri.NatGeoWorldMap'            => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_NATGEO'),
											'NASAGIBS.ViirsEarthAtNight2012' => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_NASA'),
											'OpenStreetMap.Mapnik'           => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_MAPNIK'),
											'OpenStreetMap.HOT'              => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_HOT'),
											'Esri.OceanBasemap'              => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_OCEAN_BASE_MAP'),
											'Esri.WorldStreetMap'            => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_WORLDSTREET'),
											'Esri.WorldTopoMap'              => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_WORLD_TOPO'),
											'Esri.WorldGrayCanvas'           => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_STYLE_WORLD_GRAY_CANVAS'),
										],
										'std' => 'OpenStreetMap.Mapnik',
										'inline' => true,
									],

									'multi_location_items' => [
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_MULTI_LOCATION_ITEMS'),
										'attr'  => [
											'title' => [
												'type'  => 'text',
												'title' => Text::_('COM_SPPAGEBUILDER_ADDON_LOCATION_ITEM_TITLE'),
												'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_LOCATION_ITEM_TITLE_DESC'),
												'std'   => 'Location Item Title',
											],
						
											'location_item' => [
												'type'  => 'gmap',
												'title' => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_LOCATION'),
												'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_LOCATION_DESC'),
												'std'   => '40.7970,-73.9491',
											],
						
											'location_popup_text' => [
												'type'  => 'textarea',
												'title' => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_INFOWINDOW'),
												'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_INFOWINDOW_DESC'),
												'std'   => 'Manhattan Island',
											],
						
											'custom_icon' => [
												'type'   => 'media',
												'format' => 'image',
												'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ICON'),
												'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ICON_DESC'),
											],
										],
									],
								],
							],
						],
						'options' => [
							'fields' => [
								[
									'zoom' => [
										'type'        => 'slider',
										'title'       => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ZOOM'),
										'desc'        => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ZOOM_DESC'),
										'std'         => 13,
										'max'         => 50,
									],

									'mousescroll' => [
										'type'  => 'checkbox',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_MOUSE_SCROLL'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_MOUSE_SCROLL_DESC'),
										'std'   => 0,
									],

									'dragging' => [
										'type'  => 'checkbox',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ENABLE_DRAGGING'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_DRAGGING_DESC'),
										'std'   => 0,
									],

									'zoomcontrol' => [
										'type'  => 'checkbox',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_ZOOMCONTROL'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_ZOOMCONTROL_DESC'),
										'std'   => 0,
									],

									'attribution' => [
										'type'  => 'checkbox',
										'title' => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_ATTRIBUTION'),
										'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_OPENSTREETMAP_ENABLE_ATTRIBUTION_DESC'),
										'std'   => 1,
									],
								],
							],
						],
					],
				],
			],
			'openstreetmap_add_new_multi_location' => [
				'action' => 'click',
				'type' => 'plus',
				'icon' => 'plusCircle',
				'tooltip' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ADD_NEW'),
				'meta' => [
					'key' => 'multi_location_items',
					'location_item' => '40.7970,-73.9491',
					'location_popup_text' => 'Chittagong',
				],
			],
		],
	],

	'attr' => [
		'general' => [
			
		],
	],
]);
