<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="{{ route('start') }}">Library</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @if (Auth::check())
                  @php $role = Auth::user()->role->name; @endphp
                  @if ($role === 'admin')
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">Manage Users</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}">Manage Books</a>
                      </li>
                  @endif
              @endif
          </ul>
          <div class="text-end">
              @if (Route::has('login'))
                  @auth
                  <div class="dropdown">
                      <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                              <form action="{{ route('logout') }}" method="post">
                                  @csrf
                                  <button type="submit" class="dropdown-item">Logout</button>
                              </form>
                          </li>
                      </ul>
                  </div>
                  @else
                  <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Login</a>
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                  @endif
                  @endauth
              @endif
          </div>
      </div>
  </div>
</nav>