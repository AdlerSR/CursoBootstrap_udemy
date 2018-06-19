<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
	<title>Carrosel</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.row{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div id="controleCarrossel" class="carousel slide" data-ride="carousel" data-interval="2000">
						<ol class="carousel-indicators">
							<li data-target="#controleCarrossel" data-slide-to="0" class="active"></li>
							<li data-target="#controleCarrossel" data-slide-to="1"></li>
							<li data-target="#controleCarrossel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="img/carrossel1.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/carrossel2.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/carrossel3.jpg">
							</div>
						</div>

						<a href="#controleCarrossel" class="carousel-control-prev" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Voltar</span>
						</a>

						<a href="#controleCarrossel" class="carousel-control-next" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Próximo</span>
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div id="controleCarrossel2" class="carousel slide" data-ride="carousel" data-interval="5000">
						<ol class="carousel-indicators">
							<li data-target="#controleCarrossel2" data-slide-to="0" class="active"></li>
							<li data-target="#controleCarrossel2" data-slide-to="1"></li>
							<li data-target="#controleCarrossel2" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="img/carrossel1.jpg">
								<div class="carousel-caption d-none d-md-block">
									<h3>Primeiro Título do meu Slide</h3>
									<p>Subtítulo do meu slide</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/carrossel2.jpg">
								<div class="carousel-caption d-none d-md-block">
									<h3>Segundo Título do meu Slide</h3>
									<p>Subtítulo do meu slide</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/carrossel3.jpg">
								<div class="carousel-caption d-none d-md-block">
									<h3>Terceiro Título do meu Slide</h3>
									<p>Subtítulo do meu slide</p>
								</div>
							</div>
						</div>

						<a href="#controleCarrossel2" class="carousel-control-prev" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Voltar</span>
						</a>

						<a href="#controleCarrossel2" class="carousel-control-next" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Próximo</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	
	</script>
</body>
</html>