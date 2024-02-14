<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hack125</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Novità</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Recensioni</a>
        </li>         
        <li class="nav-item">
          <a class="nav-link" href="{{route('videogame.index')}}">Lista giochi</a>
        </li>         
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Utente</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Benvenuto : {{Auth::user()->name}}</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route("user.profile")}}">Profilo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">I tuoi giochi</a></li>
            <li><a class="dropdown-item" href="{{route('videogame.form')}}">Carica il tuo gioco</a></li>
          </li>
        </ul>
        <li>
          <form action="{{route("logout")}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
          </form>
        </li>
        @endguest
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>

    </div>
  </div>
</nav>