<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 *
 * @property $id_food
 * @property $name
 * @property $content
 * @property $total_amount
 * @property $cost
 * @property $created_at
 * @property $updated_at
 * @property $fk_supplier
 *
 * @property Supplier $supplier
 * @property Careful[] $carefuls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Food extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'food';
    protected $primaryKey = 'id_food';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['name', 'content', 'total_amount', 'cost', 'fk_supplier'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'fk_supplier', 'rfc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carefuls()
    {
        return $this->hasMany(Careful::class, 'id_food', 'fk_food');
    }
    
}
