<div class="card shadow-sm mb-4" style="border: 2px double red;">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

        <p class="card-text">
            {{ $slot }}
        </p>

        @if(isset($footer))
            <div class="mt-3">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>



{{-- usare gli isset x richiamo altro compon. logica, 
@isset($footer)
<div class="mt-3">
    {{ $footer }}
</div>
@endisset --}}