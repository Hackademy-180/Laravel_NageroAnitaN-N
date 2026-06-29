<x-layout>

    <h1 class="mb-4">Lista Articoli</h1>



    @foreach($articles as $article)

                                        <x-card :title="$article->title">



                                            {{ Str::limit($article->content, 120) }}

                                            <x-slot:footer>

                                            {{-- TAG AD ARTICOLO --}}



                                                <a href="{{ route('articles.show', $article) }}" class="btn btn-info btn-sm">
                                                    Leggi
                                                </a>
                                            </x-slot:footer>



                                {{-- ELIMINARE --}}
        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn-close" aria-label="Close"></button>
        </form>

                                        </x-card>

    @endforeach

</x-layout>