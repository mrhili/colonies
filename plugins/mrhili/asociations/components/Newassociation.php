<?php

namespace Mrhili\Asociations\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Mrhili\Asociations\Models\Association;

use Flash;

class Newassociation extends ComponentBase{
	


	public function componentDetails(){

		return [
			'name' => 'New Association',
			'description' => 'New Association',

		];
	}

	function generateRandomString($length = 10) {
	    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}


	public function slugify($text)
	{
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  // trim
	  $text = trim($text, '-');

	  // remove duplicate -
	  $text = preg_replace('~-+~', '-', $text);

	  // lowercase
	  $text = strtolower($text);

	  if (empty($text)) {
	    return $this->generateRandomString();
	  }

	  return $text;
	}


	public function onSave(){



				$validator = Validator::make([
					'name' => Input::get('name')
					],[
					'name' => 'required|min:3'
					]);

				if( $validator->fails() ){

					return Redirect::back()->withErrors( $validator );

				}else{

					$association = new Association();

					$association->name  =  Input::get('name');

					$association->domaine  =  Input::get('domaine');

					$association->region  =  Input::get('region');

					$association->city  =  Input::get('city');

					$association->adresse  =  Input::get('adresse');

					$association->tel  =  Input::get('tel');

					$association->email  =  Input::get('email');

					$association->slug  =  $this->slugify( Input::get('slug')  );

					$association->logo  =  Input::file('logo');


					$association->save();

					Flash::success('Association created');

					return Redirect::back();

				}


	}

	public $assoctiaions;
}