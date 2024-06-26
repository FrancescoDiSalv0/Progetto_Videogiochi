<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="text-center text-danger">
                    Inserisci i dati del tuo videogioco.  
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

                <form method="POST" action="{{route('videogame.submit')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  {{-- <div class="mb-3">
                    <label class="form-label">Autore</label>
                    <input type="text" class="form-control" name="author">
                  </div> --}}
                  <div class="mb-3">
                    <label class="form-label">Anno di pubblicazione</label>
                    <input type="number" class="form-control" name="year">
                  </div>
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="Scrivi la tua descrizione qui" name="description"></textarea>
                  <label for="floatingTextarea2">Descrizione videogioco</label>
                </div>
                <div class="input-group">
                  <input type="file" class="form-control my-4 mb-4" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="img">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-2">Invia</button>
                </div>
                </form>             
            </div>
        </div>
    </div>
</x-layout>