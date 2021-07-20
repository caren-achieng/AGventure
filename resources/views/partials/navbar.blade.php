
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ Route('home') }}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ Route('posts') }}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Posts</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ Route('articles') }}"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Articles</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
      <a class="navbar-brand" href="#">AGventure</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            @auth
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ Route('dash') }}">Dashboard <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Profile</a>
                <a class="nav-item nav-link" href="{{ Route('upload') }}">Upload</a>
                <a class="nav-item nav-link" href="#">Articles</a>
                <a class="nav-item nav-link" href="{{ Route('posts') }}">Posts</a>

                <!--<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                </div>
            @endauth
            <div class="navbar-nav ms-auto">
                <div class="d-flex justify-content-start align-items-center">
                    @auth

                        <form method ="POST" action = "{{ route('logout')}}">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary"> Log Out</button>
                        </form>
                        @else
                        <li class="nav-item" > <a class="nav-link" href="{{ route("login") }}">Log In</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route("register") }}">Register</a></li>
                    @endauth
                    </div>
            </div>
        </div>
    </nav> --}}
