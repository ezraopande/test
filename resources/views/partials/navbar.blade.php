<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        <a href="https://x.com/{{ setting('twitter_username') ?? 'Apen School' }}"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/{{ setting('instagram_username') ?? 'Apen School' }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ setting('youtube_link') ?? 'Apen School' }}"><i class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/{{ setting('whatsapp_number') ?? 'Apen School' }}"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <a href="#"><i class="far fa-location-dot"></i> {{ setting('location') ?? 'Apen School' }}</a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-envelopes"></i> {{ setting('email') ?? 'Apen School' }}</a>
                            </li>
                            <li>
                                <a href=""><i class="far fa-phone-volume"></i> {{ setting('phone') ?? 'Apen School' }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="/">
                @if(setting('logo'))
                <img src="{{ asset('storage/' . setting('logo')) }}" alt="{{ setting('name') }} Logo" class="img-fluid" style="max-height: 50px;">
            @else
                <span>{{ setting('name') ?? 'Apen School' }}</span>
            @endif
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link search-box-outer"><i class="far fa-search"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <!-- Home link -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                        </li>

                        <!-- About us link -->
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="/about-us">About Us</a>
                        </li>

                        <!-- Courses link -->
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ Request::is('our-courses') ? 'active' : '' }}" href="/our-courses">Courses</a>
                        </li>

                        <!-- Clubs dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('mobigirlz') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Clubs</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item {{ Request::is('mobigirlz') ? 'active' : '' }}" href="/mobigirlz">MobiGirls</a></li>
                            </ul>
                        </li>

                        <!-- Admissions dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('admissions*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Admissions</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item {{ Request::is('how-to-apply') ? 'active' : '' }}" href="/how-to-apply">How To Apply</a></li>
                                <li><a class="dropdown-item {{ Request::is('online-application') ? 'active' : '' }}" href="/online-application">Online Application</a></li>
                                <li><a class="dropdown-item {{ Request::is('tuition-fees') ? 'active' : '' }}" href="/tuition-fees">Tuition Fees</a></li>
                                <li><a class="dropdown-item {{ Request::is('bootcamps') ? 'active' : '' }}" href="/bootcamps">Bootcamps</a></li>
                            </ul>
                        </li>

                        <!-- Programs dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('programs*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Programs</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="#">Ajira Digital</a></li>
                                <li><a class="dropdown-item" href="#">Google Hustle Academy</a></li>
                                <li><a class="dropdown-item" href="#">Corporate Training Programs</a></li>
                            </ul>
                        </li>

                        <!-- Blog link -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                        </li>

                        <!-- BPO link -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('bpo') ? 'active' : '' }}" href="/bpo">BPO</a>
                        </li>

                        <!-- Contact link -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="/contact-us">Contact</a>
                        </li>
                    </ul>
                    <div class="nav-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i class="far fa-search"></i></button>
                        </div>
                        <div class="nav-right-btn mt-2">
                            <a href="/online-application" class="theme-btn"><span class="fal fa-pencil"></span>Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>



<div class="search-popup">
<button class="close-search"><span class="far fa-times"></span></button>
<form action="#">
<div class="form-group">
<input type="search" name="search-field" placeholder="Search Here..." required>
<button type="submit"><i class="far fa-search"></i></button>
</div>
</form>
</div>