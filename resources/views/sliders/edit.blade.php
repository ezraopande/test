


    <h1>Edit Slider</h1>

    <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $slider->image) }}" width="100">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $slider->title }}" required> </div> <div class="form-group"> <label for="subtitle">Subtitle</label> <input type="text" name="subtitle" class="form-control" value="{{ $slider->subtitle }}" required> </div> <div class="form-group"> <label for="description">Description</label> <textarea name="description" class="form-control">{{ $slider->description }}</textarea> </div> <div class="form-group"> <label for="link1_text">Link 1 Text</label> <input type="text" name="link1_text" class="form-control" value="{{ $slider->link1_text }}"> </div> <div class="form-group"> <label for="link1_url">Link 1 URL</label> <input type="text" name="link1_url" class="form-control" value="{{ $slider->link1_url }}"> </div> <div class="form-group"> <label for="link2_text">Link 2 Text</label> <input type="text" name="link2_text" class="form-control" value="{{ $slider->link2_text }}"> </div> <div class="form-group"> <label for="link2_url">Link 2 URL</label> <input type="text" name="link2_url" class="form-control" value="{{ $slider->link2_url }}"> </div> <button type="submit" class="btn btn-success">Update Slider</button> </form> 
