@extends('layouts.app') 

@section('title', 'Our Course') 

@section('content')

    @include('layouts.breadcrumb')

    
<div class="contact-area py-120">
<div class="container">
<div class="contact-content">
<div class="row">
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-map-location-dot"></i>
</div>
<div class="contact-info-content">
<h5>Office Address</h5>
<p>{{ setting('location') ?? 'Default System Name' }}</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-phone-volume"></i>
</div>
<div class="contact-info-content">
<h5>Call Us</h5>
<p>{{ setting('phone') ?? 'Default System Name' }}</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-envelopes"></i>
</div>
<div class="contact-info-content">
<h5>Email Us</h5>
<p><a href="" class="__cf_email__">{{ setting('email') ?? 'Default System Name' }}</a></p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-alarm-clock"></i>
</div>
<div class="contact-info-content">
<h5>Open Time</h5>
<p>Mon - Sat (10.00AM - 05.30PM)</p>
</div>
</div>
</div>
</div>
</div>
<div class="contact-wrapper">
<div class="row">
<div class="col-lg-5">
<div class="contact-img">
<img src="assets/img/contact/01.jpg" alt>
</div>
</div>
<div class="col-lg-7 align-self-center">
<div class="contact-form">
<div class="contact-form-header">
<h2>Get In Touch</h2>
<p>It is a long established fact that a reader will be distracted by the readable
content of a page randomised words which don't look even slightly when looking at its layout. </p>
</div>
<form method="post" action="" id="contact-form">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your Name" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Your Email" required>
</div>
</div>
</div>
<div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Your Subject" required>
</div>
<div class="form-group">
<textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
</div>
<button type="submit" class="theme-btn">Send
Message <i class="far fa-paper-plane"></i></button>
<div class="col-md-12 mt-3">
<div class="form-messege text-success"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="contact-map">
<iframe src="{{ setting('maps_link') ?? 'Default System Name' }}" style="border:0;" allowfullscreen loading="lazy"></iframe>
</div>

    
@endsection
