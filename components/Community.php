<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Community extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.community.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.community.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'groupId'               => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.groupId.title'),
                'type'              => 'string',
                'default'           => '82040219',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.groupId.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.groupId.placeholder'),
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.community.groupId.validationmessage')
            ],
            'mode'                  => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.mode.title'),
                'type'              => 'dropdown',
                'options'           => [
                    '3'             => Lang::get('alexlit.vkwidgets::lang.community.mode.options.subscribers'),
                    '4'             => Lang::get('alexlit.vkwidgets::lang.community.mode.options.news'),
                    '1'             => Lang::get('alexlit.vkwidgets::lang.community.mode.options.name')
                ],
                'default'           => '3',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.mode.description')
            ],
            'width'                 => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.width.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.width.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.width.placeholder'),
                'validationPattern' => '^[0-9]*$|^(auto){1}$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.community.width.validationmessage')
            ],
            'height'                => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.height.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.height.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.height.placeholder'),
                'validationPattern' => '^[0-9]*$|^(auto){1}$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.community.height.validationmessage')
            ],
            'color1'                => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.color1.title'),
                'type'              => 'string',
                'default'           => 'FFFFFF',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.color1.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.color1.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.community.color1.validationmessage')
            ],
            'color2'                => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.color2.title'),
                'type'              => 'string',
                'default'           => '000000',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.color2.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.color2.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.community.color2.validationmessage')
            ],
            'color3'                => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.color3.title'),
                'type'              => 'string',
                'default'           => '5E81A8',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.color3.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.color3.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.community.color3.validationmessage')
            ],
            'wide'                  => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.wide.title'),
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.wide.description')
            ],
            'elementId'             => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.community.elementid.title'),
                'type'              => 'string',
                'default'           => 'vk_group',
                'description'       => Lang::get('alexlit.vkwidgets::lang.community.elementid.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.community.elementid.placeholder')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?139');
    }

}

?>