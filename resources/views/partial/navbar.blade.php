
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            User Name <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right text-center pr-3" aria-labelledby="navbarDropdown">

              <img src="image/user.png" alt="Avatar" width="80%" class="img-circle img-responsive ">
              <div class="row mt-2 pl-2 pr-4">
                  <div class="col-6">
                      <button type="submit" class="btn btn-outline-primary">Profile</button>
                  </div>
                  <div class="col-6">
                      <button type="button" class="btn btn-outline-danger" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</button>
                      {{-- <a class="dropdown-item btn btn-success" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a> --}}
                  </div>
              </div>
          

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li> 
    </ul>
    
  </nav>
