<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Careful extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table = 'carefuls';
    protected $primaryKey = 'id_careful'; 
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable =['date_start', 'hour', 'treatment', 'amount_food'];

    public function food(){
        return $this->belongsTo(food::class, 'fk_food', 'id_food');
    }

    public function employee(){
        return $this->belongsTo(employee::class, 'fk_employee', 'id_employee');
    }

    public function animal(){
        return $this->belongsTo(animal::class, 'fk_animal', 'id_animal');
    }
}
