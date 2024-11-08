<x-layout>

    <div class="container">
        <div class="row text-center">
            <div class="col-12  ">
                <h1 class="display-3  py-5">
                    Inserisci un gioco
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form action="{{ route('boardgame.store') }}" method="POST" class="rounded shadow p-5 bg-white"
                    enctype="multipart/form-data">
                    @if (session('success'))
                        <p class="fts-italic text-success text-center">{{ session('success') }}</p>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input value="{{ old('name') }}" type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di gioco:</label>
                        <input type="text" class="form-control" value="{{ old('type') }}" name="type">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                            {{ old('description') }}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="categories" class="form-label">Categorie:</label>
                        <select name="categories[]" id="categories" class="form-control" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del gioco:</label>
                        <input type="file" class="form-control" name="img" id="img">
                    </div>

                    <div class="mb-3 text-center pt-3">
                        <button type="sumbit" class="btn btn-dark">Inserisci nel database</button>
                    </div>
                </form>

            </div>
        </div>

    </div>



</x-layout>
