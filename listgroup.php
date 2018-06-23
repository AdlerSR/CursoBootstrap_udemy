<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
	<title>Instalação Local</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.row {
			margin-bottom: 10px;
		}
	</style>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-4">
				<ul class="list-group">
					<li class="list-group-item">Item 1</li>
					<li class="list-group-item disabled">Item 2</li>
					<li class="list-group-item">Item 3</li>
					<li class="list-group-item">Item 4</li>
					<li class="list-group-item">Item 5</li>
				</ul>
			</div>

			<div class="col-4">
				<div class="list-group">
					<a href="#" class="list-group-item active">Link1</a>
					<a href="#" class="list-group-item disabled">Link2</a>
					<a href="#" class="list-group-item list-group-item-action">Link3</a>
					<a href="#" class="list-group-item list-group-item-action">Link4</a>
					<a href="#" class="list-group-item list-group-item-action">Link5</a>
				</div>
			</div>

			<div class="col-4">
				<div class="list-group">
					<button type="button" class="list-group-item active list-group-item-action">Link1</button>
					<button type="button" class="list-group-item list-group-item-action" disabled>Link2</button>
					<button type="button" class="list-group-item list-group-item-action">Link3</button>
					<button type="button" class="list-group-item list-group-item-action">Link4</button>
					<button type="button" class="list-group-item list-group-item-action">Link5</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<ul class="list-group">
					<li class="list-group-item list-group-item-primary">Item 1</li>
					<li class="list-group-item list-group-item-secondary">Item 2</li>
					<li class="list-group-item list-group-item-success">Item 3</li>
					<li class="list-group-item list-group-item-danger">Item 4</li>
					<li class="list-group-item list-group-item-warning">Item 5</li>
				</ul>
			</div>

			<div class="col-4">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action list-group-item-primary">Link1</a>
					<a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Link2</a>
					<a href="#" class="list-group-item list-group-item-action list-group-item-success">Link3</a>
					<a href="#" class="list-group-item list-group-item-action list-group-item-danger">Link4</a>
					<a href="#" class="list-group-item list-group-item-action list-group-item-warning">Link5</a>
				</div>
			</div>

			<div class="col-4">
				<div class="list-group">
					<button type="button" class="list-group-item list-group-item-action list-group-item-primary">Link1</button>
					<button type="button" class="list-group-item list-group-item-action list-group-item-secondary">Link2</button>
					<button type="button" class="list-group-item list-group-item-action list-group-item-success">Link3</button>
					<button type="button" class="list-group-item list-group-item-action list-group-item-danger">Link4</button>
					<button type="button" class="list-group-item list-group-item-action list-group-item-warning">Link5</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-7">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5>Titulo da minha Lista</h5>
							<small>3 Dias atrás</small>
						</div>
						<p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi eum nostrum suscipit at reprehenderit tempore
							dolor reiciendis. Ullam voluptates nisi quo beatae, obcaecati iusto aut eius inventore mollitia molestias?</p>
					</a>

					<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5>Titulo da minha Lista</h5>
							<small>3 Dias atrás</small>
						</div>
						<p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi eum nostrum suscipit at reprehenderit tempore
							dolor reiciendis. Ullam voluptates nisi quo beatae, obcaecati iusto aut eius inventore mollitia molestias?</p>
					</a>

					<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5>Titulo da minha Lista</h5>
							<small>3 Dias atrás</small>
						</div>
						<p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi eum nostrum suscipit at reprehenderit tempore
							dolor reiciendis. Ullam voluptates nisi quo beatae, obcaecati iusto aut eius inventore mollitia molestias?</p>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="list-group" id="list-tab" role="tablist">
					<a href="#list-home" class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"
					    aria-control="home">Home</a>

					<a href="#list-perfil" class="list-group-item list-group-item-action" id="list-perfil-list" data-toggle="list" role="tab"
					    aria-control="Perfil">Perfil</a>

					<a href="#list-jogos" class="list-group-item list-group-item-action" id="list-jogos-list" data-toggle="list" role="tab"
					    aria-control="Perfil">Jogos</a>

					<a href="#list-contato" class="list-group-item list-group-item-action" id="list-contato-list" data-toggle="list" role="tab"
					    aria-control="contato">Contato</a>
				</div>
			</div>
			<div class="col-9">
				<div class="tab-content" id="nav-tabContent">
					<div id="list-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="list-home-list">
						<h3>Home</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quisquam iure excepturi vitae voluptatem illo, inventore
							aspernatur commodi! Maiores perspiciatis recusandae illum atque! Debitis blanditiis perspiciatis, ullam nostrum qui
							velit?</p>
					</div>

					<div id="list-perfil" class="tab-pane fade" role="tabpanel" aria-labelledby="list-perfil-list">
						<h3>Perfil</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quisquam iure excepturi vitae voluptatem illo, inventore
							aspernatur commodi! Maiores perspiciatis recusandae illum atque! Debitis blanditiis perspiciatis, ullam nostrum qui
							velit?</p>
					</div>
					
					<div id="list-jogos" class="tab-pane fade" role="tabpanel" aria-labelledby="list-jogos-list">
						<h3>Jogos</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quisquam iure excepturi vitae voluptatem illo, inventore
							aspernatur commodi! Maiores perspiciatis recusandae illum atque! Debitis blanditiis perspiciatis, ullam nostrum qui
							velit?</p>
					</div>

					<div id="list-contato" class="tab-pane fade" role="tabpanel" aria-labelledby="list-contato-list">
						<h3>Contato</h3>
						<form>
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu Nome">

								<label for="assunto">Assunto</label>
								<input type="text" class="form-control" name="assunto" id="assunto" placeholder="Digite o Assunto">

								<label for="conteudo">Conteúdo</label>
								<textarea class="form-control" name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
							</div>
							<button type="reset" class="btn btn-danger">Limpar</button>
							<button type="submit" class="btn btn-success">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>