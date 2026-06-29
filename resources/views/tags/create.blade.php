<x-layout title="Crea Tag">

    <h1 class="mb-4">Crea un nuovo Tag</h1>

    <x-card title="Nuovo Tag">

        <form action="{{ route('tags.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nome del tag</label>
                <input type="text" name="name" class="form-control" placeholder="Inserisci il nome del tag">
            </div>

            <button class="btn btn-success">Salva</button>
        </form>

      


    </x-card>

</x-layout>