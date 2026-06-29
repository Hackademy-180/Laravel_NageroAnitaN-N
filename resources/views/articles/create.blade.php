<x-layout title="Crea Articolo">

    <h1 class="mb-3">Crea un nuovo Articolo</h1>

    <x-card title="Nuovo Articolo">

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Contenuto</label>
                <textarea name="content" class="form-control" rows="4"></textarea>
            </div>

            
        <div class="mb-3">
            <label class="form-label">Tag (opzionale)</label>
            <input type="text" name="tag_name" class="form-control" placeholder="Scrivi un tag se vuoi">
        </div>

          

            <button class="btn btn-success">Salva</button>
        </form>

    </x-card>

</x-layout>