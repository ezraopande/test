<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">
        @foreach($sliders as $slider)
            <div class="hero-single" style="background: url({{ asset('storage/' . $slider->image) }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title">{{ $slider->subtitle }}</h6>
                                <h1 class="hero-title">{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                                <div class="hero-btn">
                                    @if($slider->link1_url)
                                        <a href="{{ $slider->link1_url }}" class="theme-btn">{{ $slider->link1_text }}</a>
                                    @endif
                                    @if($slider->link2_url)
                                        <a href="{{ $slider->link2_url }}" class="theme-btn theme-btn2">{{ $slider->link2_text }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>