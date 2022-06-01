<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookaddon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_id',
        'addon_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'book_id' => 'integer',
        'addon_id' => 'integer',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function addon()
    {
        return $this->belongsTo(Addon::class);
    }
}
