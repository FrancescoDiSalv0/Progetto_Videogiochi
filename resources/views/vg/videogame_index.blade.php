<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="diplay-1">Lista Videogiochi in Piattaforma</h1>
                <div class="row justify-content-center">
                    @foreach ($videogames as $videogame)
                    <div class="col-md-4">
                        <div class="card my-4">
                        <img src="" class="card-img-top" alt="immagine-casuale">
                        <div class="card-body">
                          <h5 class="card-title">Titolo: </h5>
                          <h5 class="card-title">Autore: </h5>
                          <a href="" class="btn btn-primary">Vai a dettaglio</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                
                
            </div>
        </div>
    </div>
</x-layout>