<?php namespace AlexLit\VkWidgets\Components;

// use Cache;
use Lang;
// use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkGroup extends ComponentBase
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
                'default'           => '20003922',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.group_id.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.group_id.placeholder')
            ],
            'mode' => [
                'title'             => 'Вид',
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
                'validationPattern' => '^[0-9auto]*$',
                'validationMessage' => 'Поле должно быть пустым или содержать число!'
            ],
            'height' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.title'),
                'type'              => 'string',
                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.height.placeholder'),
                'validationPattern' => '^[0-9auto]*$',
                'validationMessage' => 'Поле должно быть пустым или содержать число!'
            ],
            'color1' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.title'),
                'type'              => 'string',
                'default'           => 'FFFFFF',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color1.placeholder'),
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => 'Цвет фона должен быть в формате RRGGBB!'
            ],
            'color2' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.title'),
                'type'              => 'string',
                'default'           => '000000',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color2.placeholder'),
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => 'Цвет текста должен быть в формате RRGGBB!'
            ],
            'color3' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.title'),
                'type'              => 'string',
                'default'           => '5E81A8',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkgroup.color3.placeholder'),
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => 'Цвет кнопок должен быть в формате RRGGBB!'
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