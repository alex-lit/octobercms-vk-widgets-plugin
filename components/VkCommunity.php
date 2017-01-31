<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkCommunity extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.vkcommunity.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'group_id' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.group_id.title'),
                'type'              => 'string',
                'default'           => '82040219',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.group_id.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.group_id.placeholder'),
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.group_id.validationmessage')
            ],
            'mode' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.mode.title'),
                'type'              => 'dropdown',
                'options'           => [
                    '3' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.mode.options.subscribers'),
                    '4' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.mode.options.news'),
                    '1' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.mode.options.name')
                ],
                'default'           => '3',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.mode.description')
            ],
            'width' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.width.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.width.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.width.placeholder'),
                'validationPattern' => '^[0-9]*$|^(auto){1}$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.width.validationmessage')
            ],
            'height' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.height.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.height.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.height.placeholder'),
                'validationPattern' => '^[0-9]*$|^(auto){1}$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.height.validationmessage')
            ],
            'color1' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color1.title'),
                'type'              => 'string',
                'default'           => 'FFFFFF',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color1.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color1.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color1.validationmessage')
            ],
            'color2' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color2.title'),
                'type'              => 'string',
                'default'           => '000000',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color2.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color2.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color2.validationmessage')
            ],
            'color3' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color3.title'),
                'type'              => 'string',
                'default'           => '5E81A8',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color3.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color3.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkcommunity.color3.validationmessage')
            ],
            'wide' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.wide.title'),
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.wide.description')
            ],
            'elementId' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkcommunity.elementid.title'),
                'type'              => 'string',
                'default'           => 'vk_group',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.elementid.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkcommunity.elementid.placeholder')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?137');
    }

}

?>