<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [];
    protected $guarded = [];

    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'staff_services', 'service_id', 'staff_id');
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'id', 'service_id');
    }
}
