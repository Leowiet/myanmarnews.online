<header id="header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-top">
        <div class="d-flex justify-content-between align-items-center">
          <ul class="navbar-top-left-menu">
            <li class="nav-item">
              <a href="pages/index-inner.html" class="nav-link">Advertise</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('about-us') }}" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Events</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Write for Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">In the Press</a>
            </li>
          </ul>
          <ul class="navbar-top-right-menu">
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Sign in</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="navbar-bottom">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <a class="navbar-brand" href="#">
              <img src="assets/images/logo.svg" alt="Logo" />
            </a>
          </div>

          <div>
            <button
              class="navbar-toggler"
              type="button"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
              <!-- Close button moved outside <ul> -->
              <button class="navbar-close">
                <i class="mdi mdi-close"></i>
              </button>

              <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                 <li class="nav-item active">
                  <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>

                @foreach($categories->take(7) as $category)
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index', $category->id) }}">{{ $category->name }}</a>
                  </li>
                @endforeach

               
              </ul>
            </div>
          </div>

          <ul class="social-media">
            <li>
              <a href="#"><i class="mdi mdi-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="mdi mdi-youtube"></i></a>
            </li>
            <li>
              <a href="#"><i class="mdi mdi-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
