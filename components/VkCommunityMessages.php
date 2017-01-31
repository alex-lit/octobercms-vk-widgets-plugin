<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkCommunityMessages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'communityId'     => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.communityid.title'),
                'type'        => 'string',
                'default'     => '127607773',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.communityid.description'),
                'placeholder' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.communityid.placeholder')
            ],
            'position'        => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.position.title'),
                'type'        => 'dropdown',
                'options'     => [
                    'left'    => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.position.options.left'),
                    'right'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.position.options.right')
                ],
                'default'     => 'right',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.position.description')
            ],
            'expandIn'        => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.title'),
                'type'        => 'dropdown',
                'options'     => [
                    '0'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.0'),
                    '1'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.1'),
                    '5000'    => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.5000'),
                    '10000'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.10000'),
                    '15000'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.15000'),
                    '30000'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.30000'),
                    '40000'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.40000'),
                    '50000'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.50000'),
                    '60000'   => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.60000'),
                    '120000'  => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.options.120000')
                ],
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.expandin.description')
            ],
            'openWithSound'   => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.openwithsound.title'),
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.openwithsound.description')
            ],
            'newMessageSound' => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.newmessagesound.title'),
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.newmessagesound.description')
            ],
            'tooltip'         => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.tooltip.title'),
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.tooltip.description')
            ],
            'tooltipText'     => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.tooltiptext.title'),
                'type'        => 'string',
                'default'     => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.tooltiptext.default'),
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.tooltiptext.description'),
                'placeholder' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.tooltiptext.placeholder')
            ],
            'elementId'      => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.elementid.title'),
                'type'        => 'string',
                'default'     => 'vk_community_messages',
                'description' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.elementid.description'),
                'placeholder' => Lang::get('alexlit.vkwidgets::lang.vkcommunitymessages.elementid.placeholder')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?139');
    }

}

?>