ì<x-layout>
    <div class="row mt-3 justify-content-center">
        <div class="col-12 col-md-6">

            <form method="POST" action="{{ route('posts.store') }}" class="rounded-4 shadow bg-secondary-subtle p-3">
                @csrf
                <h2 class="mb-4">Crea Post</h2>

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}" placeholder="Titolo del post" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-dark">Salva</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Annulla</a>
                </div>
            </form>

        </div>
    </div>
</x-layout>