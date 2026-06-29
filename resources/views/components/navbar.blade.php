<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm position-sticky top-0"
    style="z-index: 1000;">
    <div class="container-fluid">

        {{-- LOGO --}}
        <img src="/media/logo.jpg" alt="logo" width="50" height="50" class="img-fluid me-2"
            style="border: 3px double red; border-radius: 6px;">

        {{-- BRAND --}}
        <a class="navbar-brand fw-bold" href="{{ route('welcome') }}">
            N N Project
        </a>

        {{-- HAMBURGER --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- MENU --}}
        <div class="collapse navbar-collapse" id="mainNavbar">

            {{-- CENTER LINKS --}}
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">
                        Articoli
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.create') }}">
                        Crea Articolo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tags.index') }}">
                        Tag
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tags.create') }}">
                        Crea Tag
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>