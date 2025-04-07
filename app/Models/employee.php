<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id_employee
 * @property $name
 * @property $second_name
 * @property $lastname
 * @property $second_lastname
 * @property $age
 * @property $sex
 * @property $type_emple
 * @property $created_at
 * @property $updated_at
 * @property $id_boss
 * @property $fk_shift
 *
 * @property Shift $shift
 * @property Employee $employee
 * @property Careful[] $carefuls
 * @property Employee[] $employees
 * @property Empshift[] $empshifts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'employees';
    protected $primaryKey = 'id_employee';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['name', 'second_name', 'lastname', 'second_lastname', 'age', 'sex', 'type_emple', 'id_boss', 'fk_shift'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shift()
    {
        return $this->belongsTo(\App\Models\Shift::class, 'fk_shift', 'id_shift');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'id_boss', 'id_employee');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carefuls()
    {
        return $this->hasMany(\App\Models\Careful::class, 'id_employee', 'fk_employee');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'id_employee', 'id_boss');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empshifts()
    {
        return $this->hasMany(\App\Models\Empshift::class, 'id_employee', 'fk_employee');
    }
    
}
