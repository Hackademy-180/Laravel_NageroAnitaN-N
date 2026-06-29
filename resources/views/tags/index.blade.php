<x-layout title="Lista Tag">

    <h1 class="mb-4">Lista Tag</h1>

    @foreach($tags as $tag)

                        <x-card :title="$tag->name">

                            <x-slot:footer>
                                <span class="badge bg-primary">ID: {{ $tag->id }}</span>
                            </x-slot:footer>

        <form action="{{ route('tags.destroy', $tag) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn-close" aria-label="Close"></button>
        </form>

                        </x-card>

    @endforeach

</x-layout>