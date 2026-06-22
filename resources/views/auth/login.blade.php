<x-layout>
    <div class="row mt-5 justify-content-center my-4">
        <div class="col-12 col-md-6">

            <form method="POST" action="/login" class="rounded-4 shadow bg-secondary-subtle p-3">
                @csrf
                <h2 class="mb-4">Login</h2>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="Inserisci email" required autofocus>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark">Login</button>
            </form>

            <p class="mt-3">Non hai un account? <a href="{{ route('register') }}">Registrati</a></p>
        </div>
    </div>
</x-layout>