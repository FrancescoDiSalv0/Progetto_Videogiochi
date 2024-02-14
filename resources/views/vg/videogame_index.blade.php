<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="diplay-1">Lista Videogiochi in Piattaforma</h1>
                <div class="row justify-content-center">
                    @foreach ($videogames as $videogame)
                    <div class="col-md-4">
                        <div class="card my-4">
                        <img src="{{Storage::url($videogame->img)}}" class="card-img-top" style="height: 350px;" alt="immagine-casuale">
                        <div class="card-body">
                          <h5 class="card-title">Titolo: {{$videogame->title}}</h5>

                          @if ($videogame->user_id === null)
                          <h5 class="card-title">Autore: Pippofranco</h5>  
                        @else  
                          <h5 class="card-title">Autore: {{$videogame->user->name}}</h5>
                        @endif  

                          <h5 class="card-title">Anno di pubblicazione: {{$videogame->year}}</h5>
                          <a href="{{route('videogame.details', compact('videogame') )}}" class="btn btn-primary">Vai a dettaglio</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                
                
            </div>
        </div>
    </div>
</x-layout>