<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        // Retrieve all videos
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        // Show the form to create a new video
        return view('videos.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the background image in the 'public/videos' directory
        $backgroundImage = $request->file('background_image')->store('videos', 'public');

        // Create a new video record
        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'background_image' => $backgroundImage,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('videos.index')->with('success', 'Video created successfully.');
    }

    public function edit(Video $video)
    {
        // Show the form to edit the existing video
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if a new background image is uploaded
        if ($request->hasFile('background_image')) {
            // Delete old image if exists
            if ($video->background_image) {
                Storage::disk('public')->delete($video->background_image);
            }

            // Store new image and update the path
            $backgroundImage = $request->file('background_image')->store('videos', 'public');
            $video->background_image = $backgroundImage;
        }

        // Update the video record with new data
        $video->update([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $request->video_url,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        // Delete the background image from storage
        if ($video->background_image) {
            Storage::disk('public')->delete($video->background_image);
        }
        
        // Delete the video record
        $video->delete();

        // Redirect to the index page with a success message
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
