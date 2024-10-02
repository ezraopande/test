@extends('layouts.app')

@section('content')
    <h1>All Sliders</h1>
    <a href="{{ route('sliders.create') }}" class="btn btn-primary">Add New Slider</a>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <td><img src="{{ asset('storage/' . $slider->image) }}" width="100"></td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->subtitle }}</td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
