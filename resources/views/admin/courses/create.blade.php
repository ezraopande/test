<h2>Add Course</h2>

<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" name="category" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="duration">Duration (months)</label>
        <input type="number" name="duration" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" step="0.01" required>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label for="language">Language</label>
        <input type="text" name="language" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="skill_level">Skill Level</label>
        <input type="text" name="skill_level" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="certificate">Certificate</label>
        <select name="certificate" class="form-control" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>

    <div class="form-group">
        <label for="assessments">Assessments</label>
        <select name="assessments" class="form-control" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>

    <div class="form-group">
        <label for="requirements">Course Requirements</label>
        <textarea name="requirements" id="requirements" class="form-control">{{ old('requirements') }}</textarea>
    </div>
    
    <div class="form-group">
        <label for="experience">Professional Experience</label>
        <textarea name="experience" id="experience" class="form-control">{{ old('experience') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add Course</button>
</form>
