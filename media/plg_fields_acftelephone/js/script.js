function initInputMask(){if("undefined"!=typeof Inputmask){var n=Joomla.getOptions("acf_telephone_masks");if(0!=n.length)for(var t=document.querySelectorAll(".acf-input-mask"),e=0;e<t.length;e++)Inputmask(n[e],{jitMasking:!1,showMaskOnHover:!1}).mask(t[e]),Inputmask.setValue(t[e],t[e].defaultValue)}}document.addEventListener("DOMContentLoaded",function(n){initInputMask()});

