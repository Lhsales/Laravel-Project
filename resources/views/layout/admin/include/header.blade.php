<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #281f49;">
        <div class="container">
            <div class="collapse navbar-collapse">
                <a href="{{ route('admin.index') }}" class="navbar-brand">Laravel Web Admin</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex align-items-center">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Voltar ao site</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <a href="{{ route('auth.logout') }}" class="btn btn-outline-danger fw-bold">Logout</a>
                </div>
            </div>    
        </div>        
    </nav>
    <nav class="navbar second-navbar navbar-expand-sm navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a href="{{ route('admin.index')}}" class="nav-link text-uppercase {{ Request::routeIs('admin.index') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route('admin.experiences.index') }}" class="nav-link text-uppercase">Experiências</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownEscolarity" role="button" aria-expanded="false">
                            Escolaridades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownEscolarity">
                            <li>
                                <a href="{{ route('admin.scholarity.index') }}" class="dropdown-item">
                                    Listagem
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.scholarity.types.index') }}" class="dropdown-item">
                                    Tipos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a data-bs-toggle="dropdown" href="#" class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownLanguage">
                            Linguagens
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
                            <li>
                                <a href="{{ route('admin.languages.index') }}" class="dropdown-item">
                                    Listagem
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.languages.types.index') }}" class="dropdown-item">
                                    Tipos
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @include('layout.include.breadcrumble')
</header>