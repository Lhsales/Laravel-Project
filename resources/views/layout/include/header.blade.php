<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Laravel Web</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('experiences.*') ? 'active' : '' }}" href="{{ route('experiences.index') }}">Experiências</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('knowledges.*') ? 'active' : '' }}" href="{{ route('knowledges.index') }}">Conhecimentos</a>
                    </li>
                </ul>
            </div>
            <div class="form-inline my-2 my-lg-0">
                <a href="{{ route('auth.index') }}" class="btn btn-outline-success">Login</a>
            </div>
        </div>
    </nav>
</header>