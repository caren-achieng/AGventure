<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">AGventure</a>
              </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">WHO WE ARE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">WHAT WE DO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">HOW WE DELIVER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SUCCESS STORIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">AUTHORS</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>

        <ul class="list-group">
        <li class="nav-item" > <a class="nav-link" href="{{ route("login") }}">Log In</a></li>

        <li class="nav-item"> <a class="nav-link" href="{{ route("register") }}">Register</a></li>
        </ul>


        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
  <style>
    .navbar {
    background-color: rgb(141, 214, 141);
    overflow: hidden;
  }
  </style>
