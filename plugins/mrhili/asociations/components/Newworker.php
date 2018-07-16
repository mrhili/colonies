<?php

namespace Mrhili\Asociations\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Mrhili\Asociations\Models\Worker;

use Flash;

class Newworker extends ComponentBase{
	


	public function componentDetails(){

		return [
			'name' => 'New Worker',
			'description' => 'New Worker',

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

					$worker = new Worker();

					$worker->avatar  =  Input::file('avatar');

					$worker->name  =  Input::get('name');

					$worker->last_name  =  Input::get('last_name');

					$worker->born_at  =  Input::get('born_at');

					$worker->born_in  =  Input::get('born_in');

					$worker->maried  =  Input::get('maried');

					$worker->level_study  =  Input::get('level_study');

					$worker->field  =  Input::get('field');

					$worker->cv  =   Input::get('cv');

					$worker->kafa2as  =  Input::get('kafa2as');

					$worker->work  =   Input::get('work');

					$worker->tel  =  Input::get('tel');

					$worker->email  =  Input::get('email');


					$worker->region  =  Input::get('region');

					$worker->city  =  Input::get('city');

					$worker->adress  =  Input::get('adress');

					$worker->asociations  =  Input::get('asociations');

					$worker->events  =  Input::get('events');
					
					$worker->save();

					Flash::success('Cadre created');

					return Redirect::back();




				}


	}

	public $worker;
}