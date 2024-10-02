<!-- App header starts -->
<div class="app-header d-flex align-items-center">

  <!-- Toggle buttons start -->
  <div class="d-flex">
    <button class="btn btn-outline-primary me-2 toggle-sidebar" id="toggle-sidebar">
      <i class="bi bi-text-indent-left fs-5"></i>
    </button>
    <button class="btn btn-outline-primary me-2 pin-sidebar" id="pin-sidebar">
      <i class="bi bi-text-indent-left fs-5"></i>
    </button>
  </div>
  <!-- Toggle buttons end -->

  <!-- App brand sm start -->
  <div class="app-brand-sm d-md-none d-sm-block">
    <a href="{{ url('/dashboard') }}">
          @if ($settings->logo)
                           
              <img src="{{ asset('storage/' . $settings->logo) }}" alt="Site Logo" class="img-fluid mt-2" width="70">
          @endif
    </a>
  </div>
  <!-- App brand sm end -->

  <!-- App header actions start -->
  <div class="header-actions ms-auto d-flex align-items-center">
    
    <!-- Display logged-in user name -->
    @if (Auth::check())
      <span class="me-3">Hello, {{ Auth::user()->name }}!</span>
    @endif

    <!-- Header settings starts -->
    <div class="dropdown ms-3">
      <a id="userSettings" class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
         aria-expanded="false">
        <img src="{{ asset('admin/assets/images/user.png') }}" class="profile-avatar" alt="User Profile Picture" />
      </a>

      <div class="dropdown-menu dropdown-menu-end shadow">
        <!-- Link to user profile -->
        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
          <i class="bi bi-person fs-4 me-2"></i>Profile
        </a>

        <!-- Logout option -->
        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-escape fs-4 me-2"></i>Logout
        </a>

        <!-- Logout form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
    <!-- Header settings ends -->

  </div>
  <!-- App header actions end -->

</div>
<!-- App header ends -->



