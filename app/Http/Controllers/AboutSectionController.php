<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSection; 

class AboutSectionController extends Controller
{
    public function index()
    {
        $about = AboutSection::first();
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, AboutSection $about)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'services' => 'nullable|string',
            'quote' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('about_images', 'public');
        }

        $about->update($data);

        return redirect()->back()->with('success', 'About Section updated successfully!');
    }
}
