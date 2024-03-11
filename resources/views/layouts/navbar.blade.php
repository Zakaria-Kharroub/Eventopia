









<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('/')}}" style="color: #1F2532;"><span class="nav-brand-two text-primary">eventopia</span></a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link ml-5 navigation" href="" >Contact</a>
                </li>




                <li class="nav-item mt-2" style="padding-top: 5px;" >
                    <input class="search-input form-control me-2" type="text"  id="searchInput"  oninput="search()" placeholder="Search" >
                </li>


                @auth

                @if (Auth::user()->role_id == 2)


                <div class="dropdown mt-1 ms-2">
                    <a class="btn btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                       {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">profile</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                            gerer events
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('myReservation')}}">mes reservation</a></li>

                        <li><a href="{{route('logout')}}" class="dropdown-item" href="">Log out</a></li>
                    </ul>
                </div>

                @else

                <div class="dropdown mt-1 ms-2">
                    <a class="btn btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                       {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">profile</a></li>
                        <li><a class="dropdown-item" href="{{route('myReservation')}}">mes reservation</a></li>
                        <li><a href="{{route('logout')}}" class="dropdown-item" href="">Log out</a></li>
                    </ul>
                </div>


                @endif








                @else
                    <li class="nav-item">
                        <a class="nav-link ml-5 navigation" href="{{route('login')}}" >login</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5 navigation" href="{{route('register')}}" >register</a>
                    </li>
                @endauth


            </ul>
        </div>
    </div>
</nav>
