@extends('layout.admin.base')

@section('head-title', 'Index')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title text-center text-uppercase ">Experiências</h5>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6 border-end text-center">
                                <div class="row">
                                    <span class="font-monospace display-3">{{ $viewModel->experience_count }}</span>
                                </div>
                                <div class="row">
                                    <small>Experiências registradas</small>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="row align-items-center h-100">
                                    @if($viewModel->experience_active)
                                        <small>Atualmente empregado</small>
                                    @else
                                        <small>Atualmente desempregado</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <small>
                            <a href="{{ route('admin.experiences.index') }}" class="stretched-link link-primary text-decoration-none">Clique para ver experiências</a>
                        </small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title text-center text-uppercase ">Escolaridades</h5>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6 border-end text-center">
                                <div class="row">
                                    <span class="font-monospace display-3">{{ $viewModel->scholarity_count }}</span>
                                </div>
                                <div class="row">
                                    <small>Escolaridades registradas</small>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="row">
                                    <span class="font-monospace display-3">{{ $viewModel->scholarityType_count }}</span>
                                </div>
                                <div class="row">
                                    <small>Tipos registrados</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <small>
                            <a href="{{ route('admin.scholarity.index') }}" class="stretched-link link-primary text-decoration-none">Clique para ver escolaridades</a>
                        </small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title text-center text-uppercase ">Linguagens</h5>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6 border-end text-center">
                                <div class="row">
                                    <span class="font-monospace display-3">{{ $viewModel->language_count }}</span>
                                </div>
                                <div class="row">
                                    <small>Linguagens registradas</small>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="row">
                                    <span class="font-monospace display-3">{{ $viewModel->languageType_count }}</span>
                                </div>
                                <div class="row">
                                    <small>Tipos registrados</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <small>
                            <a href="{{ route('admin.languages.index') }}" class="stretched-link link-primary text-decoration-none">Clique para ver linguagens</a>
                        </small>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row my-3">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title text-center text-uppercase">Mensagens recebidas</h5>
                        </div>
                        <div class="row py-3">
                            <div class="col-md-6 border-end text-center">
                                <div class="row">
                                    <span class="font-monospace display-3">2</span>
                                </div>
                                <div class="row">
                                    <small>Mensagens não lidas</small>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="row align-items-center h-100">
                                    <div class="d-grip gap-2">
                                        <button class="btn btn-block btn-outline-primary">Acessar e-mails recebidos</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

