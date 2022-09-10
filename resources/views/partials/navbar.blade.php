<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Coffee-Shop Ala-Ala</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fw-normal">
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) == 'home' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) == 'products' ? 'active' : '' }}" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
        {{-- <li class="nav-item">
          <a class="btn btn-warning text-dark tombol{{ request()->segment(1) == 'order' ? 'active' : '' }}" href="/login">Order Now</a>
        </li> --}}

        
          @if(auth()->check() && auth()->user()->is_admin == '0') 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-sidebar-reverse"></i>  Profile</a></li>
              <li><a class="dropdown-item" href="/cart"><i class="bi bi-bag-check"> Cart</i><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></a></li>
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
        {{-- <li class="nav-item dropdown border-0">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropwdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            Welcome back, {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-sidebar-reverse"></i>  Profile</a></li>
            <li><a class="dropdown-item" href="/profile"><i class="bi bi-bag-check"> Cart</i><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
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
          </li> --}}
      </ul>
          @elseif(auth()->check() && auth()->user()->is_admin == '1') 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-bottom: 0;">
              Welcome back, {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
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
          @else
        <li class="nav-item">
          <a class="btn btn-warning text-dark tombol{{ request()->segment(1) == 'order' ? 'active' : '' }}" href="/login">Order Now</a>
        </li>
      </ul>
      @endif


      
{{-- 
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
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
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul> --}}

     
    </div>
  </div>
</nav>


