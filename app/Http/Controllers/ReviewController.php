<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Event;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('event')->get();
        return
            view('reviews.index',
                compact('reviews'));
    }

    public function create()
    {
        $events = Event::all();
        return
            view('reviews.create',
                compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events, id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);
        Review::create($request->all());
        return
            redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function show(Review $review)
    {
        $review->load('event');
        return
            view('reviews.show',
                compact('review'));
    }

    public function edit(Review $review)
    {
        $events = Event::all();
        return
            view('reviews.edit',
                compact('review', 'events'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'event_id' => 'required|exists:events, id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);
        $review->update($request->all());
        return
            redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return
            redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
