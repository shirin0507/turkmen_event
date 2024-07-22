<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'venue_id',
        'category_id',
        'organizer-id',
    ];

    public function venue()
    {
        return
            $this->belongsTo(Venue::class);
    }

    public function category()
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
}
