<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Share extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.share.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.share.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'style' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.share.style.title'),
                'type'              => 'dropdown',
                'options'           => [
                    'round'         => Lang::get('alexlit.vkwidgets::lang.share.style.options.round'),
                    'round_nocount' => Lang::get('alexlit.vkwidgets::lang.share.style.options.round_nocount'),
                    'link'          => Lang::get('alexlit.vkwidgets::lang.share.style.options.link'),
                    'link_noicon'   => Lang::get('alexlit.vkwidgets::lang.share.style.options.link_noicon'),
                    'custom'        => Lang::get('alexlit.vkwidgets::lang.share.style.options.custom')
                ],
                'default'           => 'round',
                'description'       => Lang::get('alexlit.vkwidgets::lang.share.style.description')
            ],
            'text' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.share.text.title'),
                'type'              => 'string',
                'default'           => Lang::get('alexlit.vkwidgets::lang.share.text.default'),
                'description'       => Lang::get('alexlit.vkwidgets::lang.share.text.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.share.text.placeholder')
            ],
            'link' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.share.link.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.vkwidgets::lang.share.link.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.share.link.placeholder')
            ],
            'elementId' => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.share.elementid.title'),
                'type'              => 'string',
                'default'           => 'vk-share-button',
                'description'       => Lang::get('alexlit.vkwidgets::lang.share.elementid.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.share.elementid.placeholder')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/share.js?94');
    }

}

?>