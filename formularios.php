<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
    <title>Formularios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .row {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="inputEmail1">Email</label>
                        <input type="email" class="form-control" name="inputEmail1" id="inputEmail1" placeholder="Insira o seu email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Ex.: seuemail@seudominio.com.br</small>
                    </div>

                    <div class="form-group">
                        <label for="inputSenha1">Senha</label>
                        <input type="password" class="form-control" name="inputSenha1" id="inputSenha1" placeholder="Insira sua Senha" readonly>
                    </div>

                    <div class="form-check">
                        <label for="" class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Manter Conectado
                        </label>
                    </div>
                    <button class="btn btn-primary" type="submit">Entrar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="text" class="form-control form-control-lg">
                <input type="text" class="form-control form-control">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail2" class="cow-col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control-plaintext" name="inputEmail2" id="inputEmail2" placeholder="Insira o seu email" value="meuemail@meudominio.com.br"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputSenha2" class="cow-col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="inputSenha2" id="inputSenha2" placeholder="Insira sua Senha">
                        </div>
                </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nome" class="col-form-label">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="end" class="col-form-label">Endereço:</label>
                        <input type="text" class="form-control" id="sobrenome" name="Endereço" placeholder="Digite seu endereço">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cidade" class="col-form-label">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nome" class="col-form-label">Estado:</label>
                            <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nome" class="col-form-label">CEP:</label>
                            <input type="text" class="form-control" id="CEP" name="CEP" placeholder="Digite seu CEP">
                        </div>
                    </div>
                    <button class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-inline">
                    <label class="sr-only" for="nameInline">Nome</label>
                    <input type="text" id="nameInline" class="form-control mb-2 mr-2" placeholder="Digite seu Nome">

                    <label class="sr-only" for="nameInline">Senha</label>
                    <input type="text" id="SenhaInline" class="form-control mb-2 mr-2" placeholder="Digite sua Senha">
                    <div>
                    <button class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>