<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zone
 *
 * @property $id_zone
 * @property $name
 * @property $location
 * @property $capacity
 * @property $type
 * @property $weather
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Zone extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'zones';
    protected $primaryKey = 'id_zone';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['name', 'location', 'capacity', 'type', 'weather'];

    public function animals(){
        return $this->hasMany(Animal::class,'id_zone', 'fk_zone');
    }

}
