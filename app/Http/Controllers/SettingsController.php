<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function edit()
    {
        $settings = Setting::first(); // Assuming there's only one settings record
        return view('settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'tagline' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'location' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'maps_link' => 'nullable|string', // Add validation for maps field
            'instagram_username' => 'nullable|string',
            'twitter_username' => 'nullable|string',
            'youtube_link' => 'nullable|url',
            'whatsapp_number' => 'nullable|string',
            'copyright' => 'nullable|string',
            'footer_description' => 'nullable|string',
        ]);

        // Retrieve the first settings record or create a new one if it doesn't exist
        $settings = Setting::first() ?: new Setting();

        // Handle logo upload if present
        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists (optional)
            if ($settings->logo) {
                \Storage::disk('public')->delete($settings->logo);
            }

            // Store the new logo
            $path = $request->file('logo')->store('logos', 'public');
            $settings->logo = $path;
        }

        // Assign values from the request
        $settings->name = $request->input('name');
        $settings->tagline = $request->input('tagline');
        $settings->email = $request->input('email');
        $settings->phone = $request->input('phone');
        $settings->location = $request->input('location');
        $settings->maps_link = $request->input('maps_link'); // Handle the maps field
        $settings->instagram_username = $request->input('instagram_username');
        $settings->twitter_username = $request->input('twitter_username');
        $settings->youtube_link = $request->input('youtube_link');
        $settings->whatsapp_number = $request->input('whatsapp_number');
        $settings->copyright = $request->input('copyright');
        $settings->footer_description = $request->input('footer_description');

        // Save settings
        $settings->save();

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
