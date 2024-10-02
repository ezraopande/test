
@php
    $about = App\Models\AboutSection::first();
@endphp

@if ($about)
    <div class="about-area py-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <img class="img-1" src="{{ asset('storage/' . $about->image) }}" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> About Us</span>
                            <h2 class="site-title">{{ $about->title }}</h2>
                        </div>
                        <p class="about-text">{{ $about->description }}</p>
                        <div class="about-content">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="about-quote">
                                        <p>{{ $about->quote }}</p>
                                        <i class="far fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-bottom">
                            <a href="#" class="theme-btn">Discover More<i class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
