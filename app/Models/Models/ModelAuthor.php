<?php

namespace App\Models\Models;
use Illuminate\Database\Eloquent\Model;

class ModelAuthor extends Model
{
    protected $table='authors';

    public function relBooks(){
        return $this->hasMany('App/Models/Models/ModelBook','id_author');
    }
}
