<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'suppliers';
     protected $primaryKey = 'rfc';
     public $incrementing = false;
     protected $keyType = 'string';
     protected $fillable = ['name', 'phone', 'mail', 'address', 'type_supp'];
}
