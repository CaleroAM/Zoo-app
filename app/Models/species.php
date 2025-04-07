<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class species extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'species';
     protected $primaryKey = 'id_species';
     public $incrementing = false;
     protected $keyType = 'string';
     protected $fillable = ['name_scientific','name_common','family'];
 
}
