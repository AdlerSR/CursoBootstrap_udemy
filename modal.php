<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
	<title>Modal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo1">
                    Disparador do meu Modal
                </button>

                <div id="modalExemplo1" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Titulo do meu Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="fechar">
                                    <span aria-hiddern="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Corpo do meu Modal!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Salvar Alterações</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		
        <div class="row">
			<div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo2">
                    Disparador do meu Modal
                </button>

                <div id="modalExemplo2" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Titulo do meu Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="fechar">
                                    <span aria-hiddern="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Corpo do meu Modal!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Salvar Alterações</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

        <div class="row">
			<div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo3">
                    Disparador do meu Modal
                </button>

                <div id="modalExemplo3" class="modal fade">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Titulo do meu Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="fechar">
                                    <span aria-hiddern="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Corpo do meu Modal!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Salvar Alterações</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // $('.modal').modal('show')
    </script>
</body>
</html>