<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animal
 *
 * @property $id_animal
 * @property $name
 * @property $age
 * @property $weigh
 * @property $height
 * @property $sex
 * @property $fecha_nac
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Careful[] $carefuls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Animal extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'animals';
    protected $primaryKey = 'id_animal';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['name', 'age', 'weigh', 'height', 'sex', 'fecha_nac', 'descripcion','fk_specie','fk_zone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function species(){
        return $this->belongsTo(species::class, 'fk_specie', 'id_specie');
    }
    public function zones(){
        return $this->belongsTo(Zone::class,'fk_zone', 'id_zone');
    }
    public function carefuls()
    {
        return $this->hasMany(careful::class, 'id_animal', 'fk_animal');
    }
    
}
