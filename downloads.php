<!DOCTYPE html>
<html>
	<head>
		<title>Downloads LabCig</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/downloads.css">
	</head>
	<body>
	<div class="container-fluid">
		<header class="col-md-offset-1 col-md-10 header">
			<br><br>
			<a href="index.php">
				<img src="img/labcig.png" class=" col-md-3 logo">
			</a>

			<div class="col-md-8 menuLi">
				<br><br>
				<ul class="col-md-12 menu">
					<a href="index.php"> <li class="col-md-3 menuLi">Home</li> </a>
					<a href="equipe.php"> <li class="col-md-3 menuLi">Equipe</li> </a>
					<a href="downloads.php"> <li class="col-md-3 menuLi">Downloads</li> </a>
					<a href="contato.php"> <li class="col-md-3 menuLi">Contato</li> </a>
				</ul>
			</div>
		</header>	
		<div class="col-md-offset-2 col-md-8 diferente">
			<div class="links">
				<ul class = "list-group">
				<?php
					require('conecta.php');

					$sql = "SELECT caminho,titulo FROM caminho_relativo ORDER BY titulo";
					$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
					while($registro = mysqli_fetch_array($resultado)){
						$caminho = $registro[0];
						$titulo = $registro[1];
						echo "
					<li class=\"list-group-item\"><a href=\"$caminho\">$titulo</a></li>";
					}		
				?>	
				</ul>
			</div>
		</div>
		<div class="footer">
			<footer class="col-md-offset-2 col-md-8">
			<br>
				<p>
				Direitos reservados© 2016 LABCIG | Universidade Federal de Santa Catarina - UFSC
				</p>
			</footer>
		</div>
	</div>
	</body>
</html>
