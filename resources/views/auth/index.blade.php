<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Login</title>

    @include('layout.include.head')
</head>
<body>
    @include('layout.include.toast')

    <section class="vh-100" style="background-color: #281f49;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0 d-flex flex-wrap align-items-center">
                  <div class="col-md-6 col-lg-7 d-none d-md-block p-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                  </div>
                  <div class="col-md-6 col-lg-5 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <form method="POST" action="{{ route('auth.login') }}">
                        {{ csrf_field() }}

                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Laravel</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Acesse sua conta</h5>
                        
                        <div class="form-group pb-2">
                            <label for="email" class="pb-2">Endereço de e-mail</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        
                        <div class="form-group pb-4">
                            <label for="password" class="pb-2">Senha</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="d-grid gap-2 pb-4">
                            <button class="btn btn-dark btn-block" type="submit">Login</button>
                        </div>
      
                        <div>
                            <a class="small text-muted" href="#!">Esqueceu a senha?</a>
                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                        </div>
                      </form>      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    @include('layout.include.scripts')
</body>
</html>