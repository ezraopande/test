@extends('backend.layouts')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <!-- Success/Failure Alerts -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Combined Settings Form -->
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <h4>General Settings</h4>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Site Name</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $settings->name) }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="tagline" class="form-label">Tagline</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-tag"></i>
                                    </span>
                                    <input type="text" name="tagline" class="form-control" id="tagline" value="{{ old('tagline', $settings->tagline) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $settings->email) }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-phone"></i>
                                    </span>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone', $settings->phone) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="location" class="form-label">Location</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-geo-alt"></i>
                                    </span>
                                    <input type="text" name="location" class="form-control" id="location" value="{{ old('location', $settings->location) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="maps_link" class="form-label">Maps Link</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-map"></i>
                                    </span>
                                    <input type="url" name="maps_link" class="form-control" id="maps_link" value="{{ old('maps_link', $settings->maps_link) }}" placeholder="Enter Google Maps link">
                                </div>
                                <small class="form-text text-muted">You can enter a link to your location on Google Maps.</small>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="logo" class="form-label">Logo</label>
                                <div class="input-group">
                                    <input type="file" name="logo" class="form-control" id="logo">
                                </div>
                                @if ($settings->logo)
                                    <img src="{{ asset('storage/' . $settings->logo) }}" alt="Site Logo" class="img-fluid mt-2" width="100">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <h4>Social Media</h4>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="instagram_username" class="form-label">Instagram Username</label>
                                <input type="text" name="instagram_username" class="form-control" id="instagram_username" value="{{ old('instagram_username', $settings->instagram_username) }}">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="twitter_username" class="form-label">Twitter Username</label>
                                <input type="text" name="twitter_username" class="form-control" id="twitter_username" value="{{ old('twitter_username', $settings->twitter_username) }}">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="youtube_link" class="form-label">YouTube Link</label>
                                <input type="url" name="youtube_link" class="form-control" id="youtube_link" value="{{ old('youtube_link', $settings->youtube_link) }}">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-4">
                                <label for="whatsapp_number" class="form-label">WhatsApp Number</label>
                                <input type="text" name="whatsapp_number" class="form-control" id="whatsapp_number" value="{{ old('whatsapp_number', $settings->whatsapp_number) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <h4>Footer Settings</h4>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="copyright" class="form-label">Copyright</label>
                                <input type="text" name="copyright" class="form-control" id="copyright" value="{{ old('copyright', $settings->copyright) }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="footer_description" class="form-label">Footer Description</label>
                                <textarea name="footer_description" class="form-control" id="footer_description" rows="4">{{ old('footer_description', $settings->footer_description) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save All Settings</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
