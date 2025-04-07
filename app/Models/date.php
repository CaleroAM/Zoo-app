<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class date extends Model
{   
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'dates';
    protected $primaryKey = 'id_date';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable =['id_employee','phone', 'email', 'street', 'cologne', 'cp', 'state'];

    public function employee(){
        return $this->belongsTo(employee::class, 'id_employee', 'id_employee');
    }
    }
