<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\Venue;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return
            view('events.index',
                compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return
            view('events.show',
                compact('event'));
    }

    public function create()
    {
        return
            view('events.create');
    }

    public function store(Request $request)
    {
        Event::create($request->all());
        return
            redirect()->route('events.index');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $venues = Venue::all();
        $categories = Category::all();
        $organizers = Organizer::all();
        return
            view('events.edit',
                compact('event', 'venues', 'categories', 'organizers'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return
            redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return
            redirect()->route('events.index');
    }
}
