<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
	<title>Botão</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-12">
				<button class="btn btn-primary">Primário</button>
				<a href="#" class="btn btn-secondary" role="button">Secundário</a>
				<input type="button" value="Success" class="btn btn-success">
				<input type="Submit" value="Danger" class="btn btn-danger">
				<input type="Reset" value="Warning" class="btn btn-warning">
				<button class="btn btn-info">Informação</button>
				<button class="btn btn-light">Luz</button>
				<button class="btn btn-dark">Sombrio</button>
				<button class="btn btn-link">Link</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<button class="btn btn-outline-primary btn-lg">Primário</button>
				<a href="#" class="btn btn-outline-secondary btn-sm" role="button">Secundário</a>
				<input type="button" value="Success" class="btn btn-outline-success">
				<input type="Submit" value="Danger" class="btn btn-outline-danger">
				<input type="Reset" value="Warning" class="btn btn-outline-warning">
				<button class="btn btn-outline-info">Informação</button>
				<button class="btn btn-outline-light">Luz</button>
				<button class="btn btn-outline-dark">Sombrio</button>
				<button class="btn btn-link">Link</button>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<button class="btn btn-outline-primary btn-lg btn-block">Primário</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<button class="btn btn-outline-primary">Primário</button>
				<button class="btn btn-outline-primary active">Primário</button>
				<button class="btn btn-primary" disabled>Primário</button>
				<a href="#" class="btn btn-primary disabled" role="button" aria-disabled="true">Link Desativado</a>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>