<?php

namespace Mrhili\Asociations\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Mrhili\Asociations\Models\Event;


use Flash;

class Newevent extends ComponentBase{
	


	public function componentDetails(){

		return [
			'name' => 'New Event',
			'description' => 'New Event',

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

					$event = new Event();

					$event->association  =  Input::get('association');

					$event->workers  =  Input::get('workers');

					$event->name  =  Input::get('name');

					$event->domain  =  Input::get('domain');

					$event->region  =  Input::get('region');

					$event->city  =  Input::get('city');

					$event->adress  =  Input::get('adress');

					$event->slug  =  $this->slugify( Input::get('slug')  );

					$event->start  =  Input::get('start');

					$event->end  =  Input::get('end');

					$event->poster  =  Input::file('poster');

					$event->tech_card  =  Input::file('tech_card');

					$event->gallery  =  Input::file('gallery');

					$event->save();

					Flash::success('Event created');

					return Redirect::back();

				}


	}

	public $event;
}