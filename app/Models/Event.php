<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'location',
        'organizer_id',
        'venue_id'
    ];

    public function venue()
    {
        return
            $this->belongsTo(Venue::class);
    }

    public function categories()
    {
        return
            $this->belongsTo(Category::class);
    }

    public function organizer()
    {
        return
            $this->belongsTo(Organizer::class);
    }

    public function tickets()
    {
        return
            $this->belongsTo(Ticket::class);
    }

    public function reviews()
    {
        return
            $this->belongsTo(Review::class);
    }

    public function orders()
    {
        return
            $this->belongsTo(Order::class);
    }
}
