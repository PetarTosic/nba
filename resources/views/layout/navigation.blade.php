<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid container">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="/teams">Teams</a>
        </li>
        @endauth
      </ul>
      <ul class="d-flex navbar-nav mb-2 mb-lg-0" role="search">
        @if (!auth()->check())
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/signin">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/signup">Sign Up</a>
        </li>
        @endif
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/signout">Sign Out</a>
        </li>
        @endauth
        <div class="d-flex p-1">
          @auth
            <h4>
              {{ auth()->user()->name }}
            </h4>
          @endauth
      </div>
      </ul>
    </div>
  </div>
</nav>