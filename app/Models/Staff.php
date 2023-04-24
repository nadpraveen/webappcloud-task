<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [];
    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Services::class, 'staff_services', 'staff_id', 'service_id');
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'id', 'staff_id');
    }
}
