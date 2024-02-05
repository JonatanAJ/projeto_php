<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sistema de login</title>

    <style>
        body{
            background-color: #f2f2f2;
        }

        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>

<body >
    <div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h2>Cadastro de usuario</h2>
                        </div>
                        <form action="?page=salvar" method="post">
                        <input type="hidden" name="acao" value="cadastrar">
                            <div>
                                <div class="mb-3">
                                    <label for="nome">nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="email">email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="senha">senha</label>
                                    <input type="password" name="senha" id="senha" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <button type="submit" class=" btn btn-primary">cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>