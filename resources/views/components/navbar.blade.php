<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">

        <img src="/media/logo.jpg" alt="logo" class="imge-fluid" width="40" height="50">
        <a class="navbar-brand" href="{{ route('posts.index' ) }}">Blog</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">I miei post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">Nuovo post</a>
                </li>
                @endauth
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <span class="nav-link text-dark">{{ auth()->user()->name }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-dark btn-sm mt-1">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>