<?php

namespace App\Repositories;

use App\Models\Contactform;
use InfyOm\Generator\Common\BaseRepository;

class ContactformRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contactform::class;
    }
}
