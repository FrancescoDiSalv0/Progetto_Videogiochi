<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="text-center text-danger">
                    Modifica Profilo  
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
                
                <form method="POST" action="{{route('user.profile.update', compact("profile"))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="number" class="form-control" name="phone" value="{{$profile->phone}}">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Scrivi la tua descrizione qui" name="description" value="{{$profile->description}}"></textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control my-4 mb-4" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="userimage">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning my-2">Modifica</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</x-layout>