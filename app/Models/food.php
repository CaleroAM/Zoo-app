<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'foods';
     protected $primaryKey = 'id_food';
     public $incrementing = false;
     protected $keyTyp = 'string';
     protected $fillable = ['name', 'content', 'total_amount', 'cost'];

     public function food(){
        return $this->belongsTo(supplier::class, 'fk_supplier', 'rfc');
     }
}
