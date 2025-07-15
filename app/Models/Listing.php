<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /** @use HasFactory<\Database\Factories\ListingFactory> */
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'type',
        'bedrooms',
        'bathrooms',
        'size_m2',
        'price',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
