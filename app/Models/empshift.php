<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empshift extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'empshifts';
    protected $primaryKey = 'id_emps';
    public $incrementing = false;
    protected $fillable =['hours_worked', 'reason'];

    public function shift(){
        return $this->belongsTo(shift::class, 'fk_shift','id_shift');
    }

    public function employee(){
        return $this->belongsTo(employee::class, 'fk_employee', 'id_employee');
    }

}

