<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shift extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'shifts';
     protected $primaryKey = 'cod_shift';
     public $incrementing = false;
     protected $keyType = 'string';
     protected $fillable = ['description', 'hour_s', 'hour_e'];
}
