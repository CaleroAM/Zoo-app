<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
 

     protected $table = 'species';
     protected $primaryKey = 'id_specie';
     public $incrementing = true;
     protected $keyType = 'int';
     protected $fillable = ['name_scientific','name_common','family'];
    

     public function animals(){
          return $this->hasMany(Animal::class, 'id_specie', 'fk_specie');
     }
}

