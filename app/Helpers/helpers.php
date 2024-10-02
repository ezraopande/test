<?php

use App\Models\Setting;

if (!function_exists('get_settings')) {
    /**
     * Retrieve settings from the database.
     *
     * @return Setting|null
     */
    function get_settings()
    {
        return Setting::first(); // Retrieve the first settings record
    }
}

if (!function_exists('setting')) {
    /**
     * Retrieve a specific setting value.
     *
     * @param string $key
     * @return mixed
     */
    function setting($key)
    {
        $settings = get_settings();
        return $settings ? $settings->$key : null; // Return null if settings are not available
    }
}
