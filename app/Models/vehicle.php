<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;


    public const STATUS = [
        6 => '6 Pages',
        12 => '12 Pages',
        20 => '20 Pages'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'weekly_fee',
        'daily_fee',
        'transmission',
        'capacity',
        'baggage_space',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'weekly_fee' => 'double',
        'daily_fee' => 'double',
    ];

    public function getStatusNameAttribute()
    {
        return [
            0 => 'Rented Out',
            1 => 'Available',
        ][$this->status] ?? 'Out For Service';
    }

    public function getStatusColorAttribute()
    {
        return [
            0 => 'red',
            1 => 'green'
        ][$this->status] ?? 'gray';
    }

    public function getWeekFeeForHumanAttribute()
    {
        return number_format($this->weekly_fee,2,'.');
    }

    public function getDailyFeeForHumanAttribute($value)
    {
        return number_format($this->daily_fee,2,'.');
    }
}
