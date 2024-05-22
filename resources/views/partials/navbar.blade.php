{{-- CSS Bootstrap --}}
<link rel="stylesheet" href="/css/bootstrap.css">

<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">Learning Project</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Learning</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('profile') ? 'active' : ''  }}" aria-current="page" href="{{ route('profile') }}">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''  }}" aria-current="page" href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('courses') ? 'active' : ''  }}" aria-current="page" href="{{ route('courses') }}">Choose Class</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link d-flex align-items-center gap-2">
                  <i data-feather="log-out"></i>
                  Logout</button>
              </form>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

{{-- Javascript Bootstrap  --}}
<script src="/js/bootstrap.js"></script>

{{-- Icon Feather  --}}
<script src="/feather-icons/dist/feather.js"></script>

{{-- Feather Replacement  --}}
<script>
  feather.replace();
</script>
