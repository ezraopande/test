@extends('layouts.app') <!-- Extend the app.blade.php file -->

@section('title', 'Home') <!-- Set the title dynamically -->

@section('content')



<main class="main">



@include('partials.slider', ['sliders' => \App\Models\Slider::all()])





@include('home.features')


@include('home.about')




@include('home.counter')



@include('home.courses')


@include('home.video')


<div class="py-120"></div>

@include('home.whyus')

<div class="py-120"></div>

@include('home.offer')

@include('home.events')

@include('home.testimonials')

@include('home.blog')

@include('home.partners')





</main>
   



@endsection
