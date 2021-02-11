<!-- Navigation -->
@php
    $items = [
        [route('home'), 'Home'],
        [route('about'), 'About'],
        [route('jukebox'), 'Jukebox'],
        [route('news'), 'News'],
        [route('contact'), 'Contact'],
    ];
@endphp

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{url('')}}">ZARTIST</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach($items as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $item[0] }}">
                            {{ $item[1] }}
                        </a>
                    </li>
                @endforeach
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-sign-in-alt"></i> Log in</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-cog"></i> Settings</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-lock"></i> Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <li><a class="dropdown-item" href="{{url('track')}}"> <i class="fas fa-music"></i> Gestion Tracks</a></li>
                        <li><a class="dropdown-item" href="{{url('actuality')}}"> <i class="fas fa-newspaper"></i> Gestion News</a></li>
                        <li><a class="dropdown-item" href="{{url('category')}}"> <i class="fas fa-quote-right"></i> Gestion Category News</a></li>
                    </ul>
                </li>
           </ul>
        </div>
    </div>
</nav>

