<x-layout>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1> Giochi inseriti</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @if (session('success'))
            <p class="fts-italic text-success text-center">{{ session('success') }}</p>
        @endif
            {{-- @dump($boardgames) --}}
            @foreach ($boardgames as $boardgame)
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="{{$boardgame->img ? Storage::url($boardgame->img) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsydLd5fxO-raIrpaYB5CEXbaUpzi5G4ZuFg&s' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><span class="fst-italic">{{ $boardgame->name }}</span></h5>
                            <p class="card-text">{{ $boardgame->type }}</p>
                            <p class="card-text">{{ $boardgame->user->name }}</p>
                            <div class="text-center">
                                <a href="{{route('boardgame.show', compact('boardgame'))}}" class="btn btn-dark">Vedi dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
