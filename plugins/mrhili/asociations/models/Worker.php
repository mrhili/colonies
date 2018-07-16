<?php namespace Mrhili\Asociations\Models;

use Model;

/**
 * Model
 */
class Worker extends Model
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
    public $table = 'mrhili_asociations_workers';

    public $attachOne = [
        'avatar' => 'System\Models\File' 
    ];


    public $belongsToMany = [

        'asociations' => [
            'Mrhili\Asociations\Models\Association',
            'table' => 'mrhili_asociations_a_w'
        ],

        'events' => [
            'Mrhili\Asociations\Models\Event',
            'table' => 'mrhili_asociations_e_w'
        ],

        'kafa2as' => [
            'Mrhili\Asociations\Models\Kafa2a',
            'table' => 'mrhili_asociations_k_w'
        ],

    ];
    
    public function getMariedOptions($value, $formData)
    {
        return [ 'عازب','متزوج','مطلق'];
    }



}
