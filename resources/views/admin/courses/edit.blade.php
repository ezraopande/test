<h2>Edit Course</h2>

<form action="{{ route('courses.update', $course) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" name="category" class="form-control" value="{{ $course->category }}" required>
    </div>

    <div class="form-group">
        <label for="duration">Duration (months)</label>
        <input type="number" name="duration" class="form-control" value="{{ $course->duration }}" required>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" step="0.01" value="{{ $course->price }}" required>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        @if($course->image)
            <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" width="50">
        @endif
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" rows="5" required>{{ $course->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="requirements">Course Requirements</label>
        <textarea name="requirements" id="requirements" class="form-control">{{ old('requirements', $course->requirements) }}</textarea>
    </div>

    <div class="form-group">
        <label for="experience">Professional Experience</label>
        <textarea name="experience" id="experience" class="form-control">{{ old('experience', $course->experience) }}</textarea>
    </div>

    <div class="form-group">
        <label for="language">Language</label>
        <input type="text" name="language" class="form-control" value="{{ $course->language }}">
    </div>

    <div class="form-group">
        <label for="skill_level">Skill Level</label>
        <input type="text" name="skill_level" class="form-control" value="{{ $course->skill_level }}">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" value="{{ $course->location }}">
    </div>

    <div class="form-group">
        <label for="certificate">Certificate</label>
        <select name="certificate" class="form-control">
            <option value="1" {{ $course->certificate ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ !$course->certificate ? 'selected' : '' }}>No</option>
        </select>
    </div>

    <div class="form-group">
        <label for="assessments">Assessments</label>
        <select name="assessments" class="form-control">
            <option value="1" {{ $course->assessments ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ !$course->assessments ? 'selected' : '' }}>No</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Course</button>
</form>
