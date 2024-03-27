<x-layout>
    <div class="container">
        <div class="row justif-content-between mt-5">
            <div class="col-5">
                <img src="{{Storage::url($videogame->img)}}" alt="">
            </div>
            <div class="col-6">
                <h1>{{$videogame->title}}</h1>
                @if ($videogame->user_id === null)
                <h3 class="card-title">Autore: Sconosciuto</h3>  
              @else  
                <h3 class="card-title">Autore: {{$videogame->user->name}}</h3>
              @endif
                <h5 class="mt-5">Descrizione</h5>
                <p>{{$videogame->description}}</p>
                <div class="my-5">
                <a href="{{route('videogame.edit', compact('videogame'))}}" class="btn btn-warning my-1">Modifica</a>
                <form method="POST" action="{{route('videogame.destroy', compact('videogame'))}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger my-1">Elimina</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>