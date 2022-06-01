<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'vehicle_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehicle_id' => 'integer',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
