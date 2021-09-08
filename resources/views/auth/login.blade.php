<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Miqueias">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Login Page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <style>
        .no-padding {
            padding: unset !important;
        }

        .marg-pad {
            margin: 1px !important;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                @if(isset($error))
                <div class="card bg-danger border-0 rounded-3 my-5 no-padding">
                    <div class="card-body no-padding">
                        <ul class="marg-pad">
                            <li>{{$error}}</li>
                        </ul>
                    </div>
                </div>
                @endif
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center fw-light">Entrar</h5>
                        <hr class="my-4">
                        <form method="POST" action="{{route('login.submit')}}">
                            @csrf
                            <label for="email">Email</label>
                            <div class="form-floating mb-3">
                                
                                <input value="miqueias@email.com" type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com" required>
                            </div>
                            <label for="password">Senha</label>

                            <div class="form-floating mb-3">
                                <input value="123456789" type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                            </div>
                            <!-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    Remember password
                                </label>
                            </div> -->
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" style="width: 100%; font-weight:bolder;" type="submit">
                                    Entrar
                                </button>
                            </div>
                            <!-- <hr class="my-4">
                            <div class="d-grid mb-2">
                                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-google me-2"></i> Entrar com Google
                                </button>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Entrar com Facebook
                                </button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        localStorage.setItem('visited', 0);
    </script>
</body>

</html>