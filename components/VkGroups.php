<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkGroups extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.vkgroup.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.vkgroup.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'group_id' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.group_id.title'),
                'type'              => 'string',
                'default'           => '82040219',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.group_id.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.group_id.placeholder'),
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkgroup.group_id.validationmessage')
            ],
            'mode' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.mode.title'),
                'type'              => 'dropdown',
                'options'           => [
                    '3' => Lang::get('alexlit.vkwidgets::lang.vkgroup.mode.options.subscribers'),
                    '4' => Lang::get('alexlit.vkwidgets::lang.vkgroup.mode.options.news'),
                    '1' => Lang::get('alexlit.vkwidgets::lang.vkgroup.mode.options.name')
                ],
                'default'           => '3',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.mode.description')
            ],
            'width' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.width.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.width.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.width.placeholder'),
                'validationPattern' => '^[0-9]*$|^(auto){1}$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkgroup.width.validationmessage')
            ],
            'height' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.placeholder'),
                'validationPattern' => '^[0-9]*$|^(auto){1}$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.validationmessage')
            ],
            'color1' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.title'),
                'type'              => 'string',
                'default'           => 'FFFFFF',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.placeholder'),
                'validationPattern' => '^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.validationmessage')
            ],
            'color2' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.title'),
                'type'              => 'string',
                'default'           => '000000',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.placeholder'),
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.validationmessage')
            ],
            'color3' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.title'),
                'type'              => 'string',
                'default'           => '5E81A8',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.placeholder'),
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.validationmessage')
            ],
            'wide' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.wide.title'),
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.wide.description')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?137');
    }

}

?>