<?php namespace Mrhili\Asociations\Models;

use Model;

/**
 * Model
 */
class Kafa2a extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mrhili_asociations_kafa2a';

    public $belongsToMany = [
        'workers' => [
                'Mrhili\Asociations\Models\Worker',
                'table' => 'mrhili_asociations_e_w'
        ]

    ];
}
