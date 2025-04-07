<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 *
 * @property $rfc
 * @property $name
 * @property $phone
 * @property $mail
 * @property $address
 * @property $type_supp
 * @property $created_at
 * @property $updated_at
 *
 * @property Food[] $food
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Supplier extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'suppliers';
    protected $primaryKey = 'rfc';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['rfc', 'name', 'phone', 'mail', 'address', 'type_supp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function food()
    {
        return $this->hasMany(\App\Models\Food::class, 'fk_supplier', 'rfc');
    }
    
}
