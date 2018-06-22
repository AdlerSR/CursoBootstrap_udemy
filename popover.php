<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
	<title>Popover</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.row{
			margin-bottom: 50px;
		}
		.esquerda{
			margin-left:250px;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-12">
				<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Titulo do Popover" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id lobortis ex, vel porttitor lectus.">
					Clique para abrir o popover
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id lobortis ex, vel porttitor lectus.">
					Popover - Top
				</button>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id lobortis ex, vel porttitor lectus.">
					Popover - Right
				</button>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id lobortis ex, vel porttitor lectus.">
					Popover - Bottom
				</button>
			</div>
		</div>
		
		<div class="row esquerda">
			<div class="col-12">
				<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id lobortis ex, vel porttitor lectus.">
					Popover - Left
				</button>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('[data-toggle="popover"]').popover()
		})
	</script>
</body>
</html>