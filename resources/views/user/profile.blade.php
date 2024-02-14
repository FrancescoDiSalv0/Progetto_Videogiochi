<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="display-1 text-primary mb-3">
                Profilo utente
            </h1>

            <ul>
                <li class="my-1">
                    Nome utente: {{Auth::user()->name}}
                </li>
                <li class="my-1">
                    Id utente: {{Auth::user()->id}}
                </li>
                <li class="my-1">
                    email utente: {{Auth::user()->email}}
                </li>
                <div class="text-center">
                    <a href="{{route('user.profile.edit')}}" class="btn btn-primary">Modifica Profilo</a>
                </div>
            </ul>
        </div>
    </div>
</x-layout>