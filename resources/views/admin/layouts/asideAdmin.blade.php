<nav style="margin-right:50px;">
    <div class="logo-name">

        <span class="logo_name">welcome <b style="color:brown;"> {{auth()->user()->name}}</b></span>
    </div>
    <div class="menu-items" >
        <ul class="nav-links">
            <!-- statistiques  -->
             <li><a href="{{route('admin')}}">
                <i class="fa-solid fa-chart-simple"></i>
                <span class="link-name">statistiques</span>
            </a></li>

            <!-- categories -->
            <li><a href="{{route('categorie')}}">
                <i class="fa-solid fa-layer-group"></i>
                <span class="link-name">categories</span>
            </a></li>


            <!-- events -->
            <li><a href="{{route('event')}}">
                <i class="fa-solid fa-calendar-check"></i>
                <span class="link-name">evenements</span>
            </a></li>

            <!-- users -->
            <li><a href="{{route('userslist')}}">
                <i class="fa-solid fa-users"></i>
                <span class="link-name">utilisateurs</span>
            </a></li>



        </ul>

        <ul class="logout-mode">
            <li><a href="{{route('logout')}}">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="link-name">Logout</span>
            </a></li>
        </li>

        </ul>

    </div>
</nav>

{{-- {{$evenements->links()}} --}}
