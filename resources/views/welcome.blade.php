<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="display-flex justify-content-center align-items-center">
    <!-- <div class="card card-body col-md-12 align-items-center">
        <div class="card card-body col-md-2 align-items-center">
            <form method="post" action="" class="col-md-6">
                <div class="col-md-12">
                    <label for=""></label>
                    <input type="text" placeholder="Digite seu login">
                </div>
                <div>
                    <label for=""></label>
                    <input type="password" placeholder="Digite sua senha">
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

    </div>
 -->
 
 <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3>Fazer login</h3>
        <form method="post" action="" class="col-md-6">
                <div class="col-md-12">
                    <label for=""></label>
                    <input type="text" placeholder="Digite um login">
                </div>
                <div>
                    <label for=""></label>
                    <input type="password" placeholder="Digite um   a senha">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
                <br>
                <a href="formulario">Criar usuário</a>
            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    </div>
</body>

</html>