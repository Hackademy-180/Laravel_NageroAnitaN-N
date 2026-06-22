<x-layout>
    <div class="row mt-5 justify-content-center my-4">
        <div class="col-12 col-md-6">

            <form method="POST" action="/register" class="rounded-4 shadow bg-secondary-subtle p-3">
                @csrf
                <h2 class="mb-4">Registrazione</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" placeholder="Nome" required autofocus>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="Email" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-control" required>
                </div>

                <button type="submit" class="btn btn-dark">Registrati</button>
            </form>

            <p class="mt-3">Hai già un account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</x-layout>