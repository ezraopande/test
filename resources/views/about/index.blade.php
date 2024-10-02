@extends('layouts.app') 

@section('title', 'About Us') 

@section('content')

    @include('layouts.breadcrumb')

    @include('home.about')

    

    @include('home.testimonials')

    @include('home.partners')


    
@endsection
