<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [];
    protected $guarded = [];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Services::class, 'staff_id', 'id');
    }
}
