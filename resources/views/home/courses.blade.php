<div class="course-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Courses</span>
                    <h2 class="site-title">Let's Check Our <span>Courses</span></h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-6 col-lg-4">
                    <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="course-img">
                            <span class="course-tag"><i class="far fa-bookmark"></i> {{ $course->category }}</span>
                            <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}">
                            <a href="" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="course-content">
            
                            <h4 class="course-title">
                                <a href="">{{ $course->title }}</a>
                            </h4>
                            <p class="course-text">
                                {{ $course->description }}
                            </p>
                            <div class="course-bottom">
                                <div class="course-bottom-left">
                                    <span><i class="far fa-clock"></i>{{ $course->duration }} Months</span>
                                </div>
                                <span class="course-price">KES {{ $course->price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
