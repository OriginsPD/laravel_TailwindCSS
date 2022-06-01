<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'vehicle_id',
        'pickup_location',
        'pickup_date',
        'dropoff_location',
        'dropoff_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
        'vehicle_id' => 'integer',
        'pickup_date' => 'date',
        'dropoff_date' => 'date',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
