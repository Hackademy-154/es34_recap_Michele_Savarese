<x-layout>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1> Dettaglio gioco <span class="fst-italic"> {{ $boardgame->name }}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dump($boardgames) --}}
            {{-- @foreach ($boardgames as $boardgame) --}}
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="{{ $boardgame->img ? Storage::url($boardgame->img) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsydLd5fxO-raIrpaYB5CEXbaUpzi5G4ZuFg&s' }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nome: <span class="fst-italic">{{ $boardgame->name }}</span></h5>
                            <p class="card-text">Tipologia: {{ $boardgame->type }}</p>
                            <p class="card-text">Descrizione: {{ $boardgame->description }}</p>
                            <div class="text-center">
                                <a href="{{route('boardgame.edit', compact('boardgame'))}}" class="btn btn-primary">Modifica Scheda</a>
                                <form action="{{route('boardgame.delete', compact('boardgame'))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="confirm('Sei sicuro di voler eliminare la scheda?')" type="submit">Elimina Scheda</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}

        </div>
    </div>

</x-layout>
