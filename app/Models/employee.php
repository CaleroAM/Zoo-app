<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'employees';
    protected $primaryKey = 'id_employee'; 
    public $incrementing = false; 
    protected $keyType = 'int';
    protected $fillable =['name', 'second_name', 'lastname', 'second_lastname', 'age', 'sex', 'type_emple'];


    public function dates(){
        return $this->hasOne(date::class,'id_employee');
    }

    public function boss(){
        return $this->belongsTo(employee::class,'id_boss');
    }

    public function subordinates(){
        return $this->hasMany(employee::class, 'id_boss');
    }
}
