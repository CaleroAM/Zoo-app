<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lot
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lot extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'lots';
    protected $primaryKey = 'id_lot';
    public $incrementing = true;
    protected $fillable = ['date_cad', 'portion', 'date_start','fk_food'];

    public function food()
    {
        return $this->belongsTo(Food::class, 'fk_food', 'id_food');
    }
}
