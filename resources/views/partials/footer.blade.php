<footer class="footer-area">
<div class="footer-shape">
<img src="assets/img/shape/03.png" alt>
</div>
<div class="footer-widget">
<div class="container">
<div class="row footer-widget-wrapper pt-100 pb-70">
<div class="col-md-6 col-lg-4">
<div class="footer-widget-box about-us">
<a href="#" class="footer-logo">
            @if(setting('logo'))
                <img src="{{ asset('storage/' . setting('logo')) }}" alt="{{ setting('name') }} Logo" class="img-fluid" style="max-height: 50px;">
            @else
                <span>{{ setting('name') ?? 'Apen School' }}</span>
            @endif
</a>
<p class="mb-3">
{{ setting('footer_description') ?? 'Apen School' }}
</p>
<ul class="footer-contact">
<li><a href=""><i class="far fa-phone"></i>{{ setting('phone') ?? 'Apen School' }}</a></li>
<li><i class="far fa-map-marker-alt"></i>{{ setting('location') ?? 'Apen School' }}</li>
<li><a href=""><i class="far fa-envelope"></i><span class="__cf_email__">{{ setting('email') ?? 'Apen School' }}</span></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Quick Links</h4>
<ul class="footer-list">
<li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Testimonials</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Update News</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Our Campus</h4>
<ul class="footer-list">
<li><a href="#"><i class="fas fa-caret-right"></i> Campus Safety</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Student Activities</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Academic Department</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Planning & Administration</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Office Of The Chancellor</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Facility Services</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Newsletter</h4>
<div class="footer-newsletter">
<p>Subscribe Our Newsletter To Get Latest Update And News</p>
<div class="subscribe-form">
<form action="#">
<input type="email" class="form-control" placeholder="Your Email">
<button class="theme-btn" type="submit">
Subscribe Now <i class="far fa-paper-plane"></i>
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="copyright-wrapper">
<div class="row">
<div class="col-md-6 align-self-center">
<p class="copyright-text">
&copy; <span id="date"></span> <a href="#"> {{ setting('name') ?? 'Default System Name' }}  </a> All Rights Reserved.
</p>
</div>
<div class="col-md-6 align-self-center">

         
<ul class="footer-social">
<li><a href="https://x.com/{{ setting('twitter_username') ?? 'Apen School' }}"><i class="fab fa-x-twitter"></i></a></li>
<li> <a href="https://www.instagram.com/{{ setting('instagram_username') ?? 'Apen School' }}"><i class="fab fa-instagram"></i></a></li>
<li><a href="https://wa.me/{{ setting('whatsapp_number') ?? 'Apen School' }}"><i class="fab fa-whatsapp"></i></a></li>
<li><a href="{{ setting('youtube_link') ?? 'Apen School' }}"><i class="fab fa-youtube"></i></a></li>
</ul>


</div>
</div>
</div>
</div>
</div>
</footer>


<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>