<?php namespace Mrhili\Asociations\Models;

use Model;

/**
 * Model
 */
class Association extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    //protected $fillable = ['name', 'domaine'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mrhili_asociations_';
    

    public $hasMany = [
        'events' => 'Mrhili\Asociations\Models\Event'
    ];


    public $attachOne = [
        'logo' => 'System\Models\File' 
     ];

    public $belongsToMany = [

        'workers' => [
            'Mrhili\Asociations\Models\Worker',
            'table' => 'mrhili_asociations_a_w'
        ]

    ];


}
