@extends('layouts.app') 

@section('title', 'Our Course') 

@section('content')

    @include('layouts.breadcrumb')


    
    @include('courses.courses')

    
@endsection
