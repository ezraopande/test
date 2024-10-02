<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
        
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'duration' => 'required|string|max:255',
            'price' => 'required|numeric',
            'language' => 'nullable|string|max:255',
            'skill_level' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'certificate' => 'boolean',
            'assessments' => 'boolean',
            'requirements' => 'nullable|string',
            'experience' => 'nullable|string',
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        Course::create($validatedData);
    
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }
    
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'duration' => 'required|string|max:255',
            'price' => 'required|numeric',
            'language' => 'nullable|string|max:255',
            'skill_level' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'certificate' => 'boolean',
            'assessments' => 'boolean',
            'requirements' => 'nullable|string',
            'experience' => 'nullable|string',
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Remove old image if exists
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }
            $imagePath = $request->file('image')->store('courses', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        $course->update($validatedData);
    
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        // Remove image if exists
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }
        
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }


    public function show(Course $course)
    {
        return view('courses.details', compact('course'));
    }

    public function showCourses()
{
    $courses = Course::all(); // Assuming you have a Course model
    return view('partial.courses', compact('courses')); // Replace 'your-view' with the name of your main view
}


}
