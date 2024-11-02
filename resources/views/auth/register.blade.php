<x-layout>

    <div class="container">
        <div class="row text-center">
            <div class="col-12  ">
                <h1 class="display-3  py-5">
                    Registrati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form action="{{ route('register') }}" method="POST" class="rounded shadow p-5 bg-white">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="name">
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password">
                    </div>


                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password:</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>


                    <div class="mb-3 text-center pt-3">
                        <button type="sumbit" class="btn btn-dark">Registrati</button>
                    </div>
                </form>

            </div>
        </div>

    </div>



</x-layout>
