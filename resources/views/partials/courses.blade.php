<div class="course-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-md-6 col-lg-6">
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

                <!-- Pagination -->
                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            @include('courses.sidebar')
        </div>
    </div>
</div>
