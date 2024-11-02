<x-layout>


    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12">
                <h1> Giochi inseriti</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dump($boardgames) --}}
@foreach ($articles as $article)
    <div class="col-12 col-md-4">

    </div>
@endforeach

        </div>
    </div>

</x-layout>
