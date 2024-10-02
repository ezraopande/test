@php
    $counters = App\Models\CounterSection::all();
@endphp

@if ($counters->isNotEmpty())
    <div class="counter-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                @foreach ($counters as $counter)
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $counter->icon) }}" alt="{{ $counter->title }}">
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="{{ $counter->count }}" data-speed="3000">{{ $counter->count }}</span>
                                <h6 class="title">+ {{ $counter->title }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
