<?php namespace Mrhili\Asociations;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

    	return [

    		'Mrhili\Asociations\Components\Associationsall' => 'associations',
    		'Mrhili\Asociations\Components\Newassociation' => 'new_association',
    		'Mrhili\Asociations\Components\Newevent' => 'new_event',
    		'Mrhili\Asociations\Components\Newworker' => 'new_worker'

    	];

    }

    public function registerSettings()
    {
    }

    public function registerFormWidgets()
    {

    	return [


    	];
    }
}
