
    <h1>Edit Video</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @ul>
        </div>
    @endif

    <form action="{{ route('videos.update', $video) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $video->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ old('description', $video->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="video_url">Video URL</label>
            <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $video->video_url) }}" required>
        </div>

        <div class="form-group">
            <label for="background_image">Background Image</label>
            <input type="file" name="background_image" class="form-control">
            @if ($video->background_image)
                <img src="{{ asset('storage/' . $video->background_image) }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>

