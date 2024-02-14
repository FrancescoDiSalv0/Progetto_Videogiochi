<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="text-center text-danger">
                    Modifica i dati del tuo videogioco
                </h1> 

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              {{-- inizio form di modifica videogiochi --}}
                <form method="POST" action="{{route('videogame.update', compact("videogame"))}}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" value="{{$videogame->title}}">
                  </div>
                  {{-- <div class="mb-3">
                    <label class="form-label">Autore</label>
                    <input type="text" class="form-control" name="author" value="{{$videogame->author}}">
                  </div> --}}
                  <div class="mb-3">
                    <label class="form-label">Anno di pubblicazione</label>
                    <input type="number" class="form-control" name="year" value="{{$videogame->year}}">
                  </div>
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="Scrivi la tua descrizione qui" name="description" value="{{$videogame->description}}"></textarea>
                  <label for="floatingTextarea2">Descrizione videogioco</label>
                </div>
                <div class="input-group">
                  <input type="file" class="form-control my-4 mb-4" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="img">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning my-2">Modifica</button>
                </div>
                </form>             
            </div>
        </div>
    </div>
</x-layout>