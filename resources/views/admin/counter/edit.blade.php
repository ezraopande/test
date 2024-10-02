
    <h2>Edit Counter Section</h2>

    @if($counters->isEmpty())
        <p>No counters available to edit.</p>
    @else
        <form action="{{ route('counter.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @foreach($counters as $counter)
                <div class="form-group">
                    <label for="counter_{{ $counter->id }}_title">Title</label>
                    <input type="text" name="counters[{{ $counter->id }}][title]" value="{{ $counter->title }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="counter_{{ $counter->id }}_count">Count</label>
                    <input type="number" name="counters[{{ $counter->id }}][count]" value="{{ $counter->count }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="counter_{{ $counter->id }}_icon">Icon</label>
                    <input type="file" name="counters[{{ $counter->id }}][icon]" class="form-control">
                    @if ($counter->icon)
                        <img src="{{ asset('storage/' . $counter->icon) }}" alt="{{ $counter->title }}" width="50">
                    @endif
                </div>

                <hr>
            @endforeach

            <button type="submit" class="btn btn-primary">Update Counter Section</button>
        </form>
    @endif

