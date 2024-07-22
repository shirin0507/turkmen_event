<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        $organizers = Organizer::all();
        return
            view('organizers.index',
                compact('organizers'));
    }

    public function create()
    {
        return
            view('organizers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'nullable|string',
        ]);
        Organizer::create($request->all());
        return
            redirect()->route('organizers.index')->with('success', 'Organizer created successfully.');
    }

    public function show(Organizer $organizer)
    {
        return
            view('organizers.show',
                compact('organizer'));
    }

    public function edit(Organizer $organizer)
    {
        return
            view('organizers.edit',
                compact('organizer'));
    }

    public function update(Request $request, Organizer $organizer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'nullable|string',
        ]);
        $organizer->update($request->all());
        return
            redirect()->route('organizers.index')->with('success', 'Organizer updated successfully.');
    }

    public function destroy(Organizer $organizer)
    {
        $organizer->delete();
        return
            redirect()->route('organizers.index')->with('success', 'Organizer deleted successfully.');
    }
}
