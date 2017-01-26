<?php namespace AlexLit\VkWidgets;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'VK Widgets',
            'description' => 'Виджеты Вконтакте',
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-vk'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\VkWidgets\Components\VkGroup'    => 'vkGroup',
        //    '\AlexLit\VkWidgets\Components\VkCommentsWidget' => 'vkCommentsWidget'
        ];
    }
}