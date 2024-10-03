
    <h1>Manage Videos</h1>
    <a href="{{ route('videos.create') }}" class="btn btn-primary">Add New Video</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Video URL</th>
                <th>Background Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr>
                    <td>{{ $video->title }}</td>
                    <td>{{ $video->description }}</td>
                    <td><a href="{{ $video->video_url }}" target="_blank">Watch Video</a></td>
                    <td><img src="{{ asset('storage/' . $video->background_image) }}" width="100" /></td>
                    <td>
                        <a href="{{ route('videos.edit', $video) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('videos.destroy', $video) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

