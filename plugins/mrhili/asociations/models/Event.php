<?php namespace Mrhili\Asociations\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mrhili_asociations_events';

    public $belongsTo = [
        'association' => 'Mrhili\Asociations\Models\Association'
    ];


    public $attachOne = [
        'poster' => 'System\Models\File',
        
        'tech_card' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File' 
    ];

    public $belongsToMany = [

        'workers' => [
            'Mrhili\Asociations\Models\Worker',
            'table' => 'mrhili_asociations_e_w'
        ]

    ];

}
