
<form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $about->title }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" required>{{ $about->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        @if($about->image)
            <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" width="100">
        @endif
    </div>

    <!-- <div class="form-group">
        <label for="services">Services</label>
        <textarea name="services" class="form-control">{{ $about->services }}</textarea>
    </div> -->

    <div class="form-group">
        <label for="quote">Quote</label>
        <textarea name="quote" class="form-control">{{ $about->quote }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

