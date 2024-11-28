<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>entrar</title>
    @vite(['resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body class="fundo">
    <div class="mx-auto p-2" style="width: 70%;">
        <img class="rounded mx-auto d-block" src="{{asset('storage/exemplo/logoCB.svg')}}">
        <div class="text-center">
            <h3 class="fw-medium"> CORPO DE BOMBEIROS MILITAR DE MINAS GERAIS </h3>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mx-auto p-2" style="width: 280px;">
                        <h5 class="fw-bold" class="text-break">REALIZAR LOGIN NO SISTEMA</h5>
                        <hr />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Usuário administrador:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="botao">
                            <a style="text-decoration: none; color: #ffff">
                                {{ __('Login') }}
                            </a>
                        </button>

                    </div>

                </form>
            </div>


        </div>
    </div>
    <footer class="rodape">
        <div>
            <img class="EEsquerdo" src="{{asset('storage/exemplo/esquerda.svg')}}">
        </div>
        <div class="direita">
            <img src="{{asset('storage/exemplo/direita.svg')}}">
        </div>
    </footer>
</body>

</html>