<?php

namespace App\Http\Controllers;

use App\Models\CounterSection;
use Illuminate\Http\Request;

class CounterSectionController extends Controller
{
    public function index()
    {
        $counters = CounterSection::all();
        return view('admin.counter.edit', compact('counters'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'counters' => 'array',
            'counters.*.count' => 'required|integer',
            'counters.*.title' => 'required|string|max:255',
            'counters.*.icon' => 'nullable|image',
        ]);

        foreach ($data['counters'] as $id => $counterData) {
            $counter = CounterSection::find($id);
            if ($request->hasFile("counters.$id.icon")) {
                $counterData['icon'] = $request->file("counters.$id.icon")->store('counter_icons', 'public');
            }
            $counter->update($counterData);
        }

        return redirect()->back()->with('success', 'Counter Section updated successfully!');
    }
}
