


    <h1>Add New Slider</h1>

    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="link1_text">Link 1 Text</label>
            <input type="text" name="link1_text" class="form-control">
        </div>
        <div class="form-group">
            <label for="link1_url">Link 1 URL</label>
            <input type="text" name="link1_url" class="form-control">
        </div>
        <div class="form-group">
            <label for="link2_text">Link 2 Text</label>
            <input type="text" name="link2_text" class="form-control">
        </div>
        <div class="form-group">
            <label for="link2_url">Link 2 URL</label>
            <input type="text" name="link2_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Slider</button>
    </form>

