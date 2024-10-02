<?php


namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the Controller class

class SliderController extends Controller
{
    // Show all sliders
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    // Show form to create a new slider
    public function create()
    {
        return view('sliders.create');
    }

    // Store a new slider
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'nullable',
            'link1_text' => 'nullable',
            'link1_url' => 'nullable',
            'link2_text' => 'nullable',
            'link2_url' => 'nullable',
        ]);

        $slider = new Slider();
        $slider->image = $request->file('image')->store('sliders', 'public');
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->link1_text = $request->link1_text;
        $slider->link1_url = $request->link1_url;
        $slider->link2_text = $request->link2_text;
        $slider->link2_url = $request->link2_url;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider added successfully');
    }

    // Show form to edit a slider
    public function edit(Slider $slider)
    {
        return view('sliders.edit', compact('slider'));
    }

    // Update a slider
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'nullable',
            'link1_text' => 'nullable',
            'link1_url' => 'nullable',
            'link2_text' => 'nullable',
            'link2_url' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $slider->image = $request->file('image')->store('sliders', 'public');
        }
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->link1_text = $request->link1_text;
        $slider->link1_url = $request->link1_url;
        $slider->link2_text = $request->link2_text;
        $slider->link2_url = $request->link2_url;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
    }

    // Delete a slider
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully');
    }
}

