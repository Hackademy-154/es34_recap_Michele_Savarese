<nav class="navbar navbar-expand-lg bg-body-tertiary shadow border-bottom" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('boardgame.index')}}">Giochi da tavolo</a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li> --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }} </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                            <li><a class="dropdown-item" href=" {{route('boardgame.create')}}">Inserisci un gioco</a></li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pannello Utente </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
