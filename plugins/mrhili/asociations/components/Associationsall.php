<?php

namespace Mrhili\Asociations\Components;

use Cms\Classes\ComponentBase;

use Mrhili\Asociations\Models\Association;

class Associationsall extends ComponentBase{
	


	public function componentDetails(){

		return [
			'name' => 'Associations list',
			'description' => 'Associations list',

		];
	}

	public function onRun(){

		$this->assoctiaions = $this->loadAssociations();
	}

	protected function loadAssociations(){

		return Association::all();

	}

	public $assoctiaions;
}