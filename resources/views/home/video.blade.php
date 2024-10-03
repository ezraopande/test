@php
    $latestVideo = \App\Models\Video::latest()->first();
@endphp

@if ($latestVideo)
<div class="video-area">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                <div class="site-heading mb-3">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Explore</span>
                    <h2 class="site-title">
                    {{ $latestVideo->title }}
                    </h2>
                </div>
                <p class="about-text">
                    {{ $latestVideo->description }}
                </p>

                <a href="/about-us" class="theme-btn mt-30">Learn More<i class="fas fa-arrow-right-long"></i></a>
            </div>
            <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
            <div class="video-content" style="background-image: url('{{ asset('storage/' . $latestVideo->background_image) }}');">

                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="{{ $latestVideo->video_url }}">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
