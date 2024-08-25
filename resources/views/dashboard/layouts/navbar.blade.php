<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>
        
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link border-0 btn btn-primary text-white">
            <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </form>
    </li>
    </ul>
  </nav>