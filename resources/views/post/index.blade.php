<x-layout>


    <!-- RELAZIONE 1:N — POST → COMMENTI (hasMany)
        RELAZIONE INVERSA — COMMENTO → USER (belongsTo)
        TRAVERSAL: $post->commenti | $commento->user | $post->user
     -->

    <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
        <h1>Lista dei post</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-dark btn-sm">+ Nuovo post</a>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @forelse ($posts as $post)
    <div class="card p-3 mb-4 shadow-sm rounded-4">

        <h4>{{ $post->title }}</h4>
        {{-- Traversal: $post->user → autore del post --}}
        <small class="text-muted">Pubblicato da <strong>{{ $post->user->name }}</strong></small>

        {{-- LIKE — Many-to-Many: $post->likers → Collection di User --}}
        <div class="d-flex align-items-center gap-2 mt-2">
            <form method="POST" action="{{ route('posts.like', $post) }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 border-0" style="font-size: 1.4rem;">
                    {{-- contains() verifica se l'utente loggato ha già messo like --}}
                    @if ($post->likers->contains(Auth::id()))
                    <i class="fa-solid fa-heart" style="color: red;"></i>
                    @else
                    <i class="fa-regular fa-heart" style="color: gray;"></i>
                    @endif
                </button>
            </form>
            <span class="text-muted small">{{ $post->likers->count() }}</span>
        </div>

        <hr>

        {{-- FORM COMMENTO --}}
        <form method="POST" action="{{ route('commenti.store') }}" class="mb-3">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="input-group">
                <input type="text" name="testo"
                    class="form-control @error('testo') is-invalid @enderror"
                    placeholder="Scrivi un commento..." required>
                <button class="btn btn-dark btn-sm">Invia</button>
            </div>
            @error('testo')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </form>

        {{-- LISTA COMMENTI — Traversal: $post->commenti → $commento->user --}}
        @forelse ($post->commenti as $commento)
        <p class="mb-1">
            {{ $commento->testo }}

            {{-- Traversal model: $commento->user → autore del commento --}}
            <small class="text-muted">scritto da <strong>{{ $commento->user->name }}</strong></small>
        </p>
        @empty
        <p class="text-muted small">Nessun commento ancora.</p>
        @endforelse

    </div>
    @empty
    <div class="alert alert-info">
        Nessun post ancora. <a href="{{ route('posts.create') }}">Crea il primo!</a>
    </div>
    @endforelse

</x-layout>