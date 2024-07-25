<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'price',
        'quantity',
        'status'
    ];

    public function event()
    {
        return
            $this->belongsTo(Event::class);
    }

    public function user()
    {
        return
            $this->hasMany(User::class);
    }
}
