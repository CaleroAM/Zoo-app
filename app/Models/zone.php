<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'zones'; 
    protected $primaryKey = 'id_zone';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['name', 'location', 'capacity', 'type', 'weather'];
}
