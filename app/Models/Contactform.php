<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Contactform extends Model
{

    public $table = 'contactforms';
    


    public $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'subject' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
