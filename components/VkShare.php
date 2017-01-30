<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkShare extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.vkshare.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.vkshare.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'style' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkshare.style.title'),
                'type'              => 'dropdown',
                'options'           => [
                    'round'         => Lang::get('alexlit.vkwidgets::lang.vkshare.style.options.round'),
                    'round_nocount' => Lang::get('alexlit.vkwidgets::lang.vkshare.style.options.round_nocount'),
                    'link'          => Lang::get('alexlit.vkwidgets::lang.vkshare.style.options.link'),
                    'link_noicon'   => Lang::get('alexlit.vkwidgets::lang.vkshare.style.options.link_noicon'),
                    'custom'        => Lang::get('alexlit.vkwidgets::lang.vkshare.style.options.custom')
                ],
                'default'           => 'round',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkshare.style.description')
            ],
            'text' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkshare.text.title'),
                'type'              => 'string',
                'default'           => Lang::get('alexlit.vkwidgets::lang.vkshare.text.default'),
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkshare.text.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkshare.text.placeholder')
            ],
            'link' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkshare.link.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkshare.link.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkshare.link.placeholder')
            ],
            'nodeId' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.vkshare.nodeid.title'),
                'type'              => 'string',
                'default'           => 'vk-share-button',
                'description'       => Lang::get('alexlit.vkwidgets::lang.vkshare.nodeid.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.vkshare.nodeid.placeholder')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/share.js?94');
    }

}

?>