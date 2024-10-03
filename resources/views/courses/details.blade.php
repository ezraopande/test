
@extends('layouts.app')

<?php
$course = \App\Models\Course::where('slug', $slug)->first();
?>


@section('title', 'Course Details')

@section('content')

@include('layouts.breadcrumb')



<div class="course-single-area py-120">
    <div class="container">
        <div class="course-single-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="course-details">
                        <div class="course-details-img mb-30">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="thumb">
                        </div>
                        <div class="course-details">
                            <h3 class="mb-20">{{ $course->title }}</h3>
                            <p class="mb-20">{{ $course->description }}</p>
                            
                            <div class="my-4">
                                <h3 class="mb-3">Course Requirements</h3>
                                <p>{{ $course->requirements }}</p>
                              
                            </div>

                            <div class="my-4">
                                <h3 class="mb-3">Professional Experience</h3>
                                <p>Quisque a nisl id sem sollicitudin volutpat. Cras et commodo quam, vel congue ligula.</p>
                            </div>

                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="course-single-sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Course Features</h4>
                            <div class="course-feature-list">
                                <a href="#"><i class="far fa-clock"></i> Duration <span>{{ $course->duration }} Months</span></a>
                                <a href="#"><i class="far fa-globe"></i> Language <span>{{ $course->language }}</span></a>
                                <a href="#"><i class="far fa-fill-drip"></i> Skill Level <span>{{ $course->skill_level }}</span></a>
                                <a href="#"><i class="far fa-location-dot"></i> Location <span>{{ $course->location }}</span></a>
                                <a href="#"><i class="far fa-graduation-cap"></i> Certificate <span>{{ $course->certificate ? 'Yes' : 'No' }}</span></a>
                                <a href="#"><i class="far fa-check-circle"></i> Assessments <span>{{ $course->assessments ? 'Yes' : 'No' }}</span></a>
                            </div>
                            <a href="#" class="theme-btn">Enroll Now<i class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
