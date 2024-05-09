<nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
    <div class="container">
  <a class="navbar-brand">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('/') }}">Home</a>
      </li>
      @guest
      <li class="nav-item">
        <a class="nav-link fw-bold" href="{{ url('/login') }}">Login</a>
      </li>
      <li class="nav-item">
      <a class="nav-link fw-bold" href="{{ url('/register') }}">Register</a>
      </li>
      @else
      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                    <ul class="dropdown-menu">
                        <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                        </li>

                        <!-- Authentication -->
                        <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                               Log Out
                             </a>
                        </form>
                       </li>
                    </ul>
            </div>
           @endguest
       </ul>
    </div>
</nav>




<!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{ Auth:: user()->name }}
  </button>
  <ul class="dropdown-menu">
    <li>
    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
    </li>
    <li>
         <form method="post" action= "{{ route('logout') }}">
            @csrf
           <a class="dropdown-item" href="{{ route('logout') }}"
           onclick = "event.preventDefault();
           this.closest('form').submit();"
           >
          Log Out
           </a>
         </form>
    </li>
  </ul>
</div> -->