<x-layout>

    <x-card :title="$article->title">

        {{ $article->content }}

        <x-slot:footer>
            @foreach($article->tags as $tag)
                <span class="badge bg-primary">{{ $tag->name }}</span>
            @endforeach

            <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning btn-sm mt-2">
                Modifica
            </a>
        </x-slot:footer>

    </x-card>

</x-layout>