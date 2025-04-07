<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empshift
 *
 * @property $id_emps
 * @property $hours_worked
 * @property $reason
 * @property $created_at
 * @property $updated_at
 * @property $fk_shift
 * @property $fk_employee
 *
 * @property Employee $employee
 * @property Shift $shift
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empshift extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'empshifts';
    protected $primaryKey = 'id_emps'; 
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['hours_worked', 'reason', 'fk_shift', 'fk_employee'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'fk_employee', 'id_employee');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shift()
    {
        return $this->belongsTo(\App\Models\Shift::class, 'fk_shift', 'id_shift');
    }
    
}
