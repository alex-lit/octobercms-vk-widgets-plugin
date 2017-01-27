<?php namespace AlexLit\VkWidgets;

use Lang;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.plugin.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.plugin.description'),
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-vk',
            'homepage'    => 'https://web2easy.ru'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\VkWidgets\Components\VkGroups' => 'vkGroups',
        ];
    }
}