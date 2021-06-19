<nav class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
      " data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/images/logo.svg" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories') }}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Sign In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
