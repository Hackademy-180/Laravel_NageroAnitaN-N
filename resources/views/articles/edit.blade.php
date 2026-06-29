<x-layout title="Modifica Articolo">

    <h1 class="mb-3">Modifica Articolo</h1>

    <x-card title="Modifica">

        <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Contenuto</label>
                <textarea name="content" class="form-control" rows="4">{{ $article->content }}</textarea>
            </div>

    <div class="mb-3">
        <label class="form-label">Tag (opzionale)</label>
        <input type="text" name="tag_name" class="form-control" placeholder="Scrivi un tag se vuoi">
    </div>


            <button class="btn btn-warning">Aggiorna</button>
        </form>

    </x-card>

</x-layout>