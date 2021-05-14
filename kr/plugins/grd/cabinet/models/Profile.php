<?php namespace Grd\Cabinet\Models;

use Model;

/**
 * Model
 */
class Profile extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grd_cabinet_profile';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
