<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animal
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
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
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = ['name','age','weigh','height','sex','fecha_nac','descripcion'];

    public function species(){
        return $this->belongsTo(species::class, 'fk_species', 'id_species');
    }

    public function zone(){
        return $this->belongsTo(zone::class, 'fk_zone', 'id_zone');
    }

}
