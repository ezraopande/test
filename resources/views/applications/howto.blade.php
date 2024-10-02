@extends('layouts.app') 

@section('title', 'Our Course') 

@section('content')

    @include('layouts.breadcrumb')

    @include('applications.how')

    @include('applications.applydetails')

    <div class="feature-area fa2 py-120"></div>

    @include('applications.video')

    @include('applications.faqs')

  

    
@endsection
