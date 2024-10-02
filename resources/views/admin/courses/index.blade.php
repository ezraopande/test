<h2>Course List</h2>
<a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Duration</th>
            <th>Price</th>
            <th>Language</th>
            <th>Skill Level</th>
            <th>Location</th>
            <th>Certificate</th>
            <th>Assessments</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->category }}</td>
                <td>{{ $course->duration }} months</td>
                <td>${{ $course->price }}</td>
                <td>{{ $course->language }}</td>
                <td>{{ $course->skill_level }}</td>
                <td>{{ $course->location }}</td>
                <td>{{ $course->certificate ? 'Yes' : 'No' }}</td>
                <td>{{ $course->assessments ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
