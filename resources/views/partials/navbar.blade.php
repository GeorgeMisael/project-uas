<nav class="navbar navbar-expand-lg main-header navbar-white navbar-light">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="navbar-nav">
              <img src="{{ asset('img/Unair/kampus-merdeka.png') }}" alt="Unair Logo" class="w-50 p-3">
          </li>
        </ul>


        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
              </li>
            </ul>
          </li>
        @endauth
        </ul>
        </div>
    </div>
</nav>