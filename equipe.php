<!DOCTYPE html>
<html>
	<head>
		<title>Equipe</title>
		<meta http-equiv="Content-Type" content="text/html; charset= UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/equipe.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php 
			include "conectar.php"; 

			$sql = "SELECT * FROM equipe";
			$resultado = mysqli_query($conexao, $sql);

		?>
	</head>
	<body>
	<!-- TOPO -->
	<div class="container-fluid">
		<header class="col-md-offset-1 col-md-10 header">
			
			<img src="img/labcig.png" class=" col-md-3 logo">

			<div class="col-md-8 menuLi">
				<br><br>
				<ul class="col-md-12 menu">
					<a href="index.html"> <li class="col-md-3 menuLi">Home</li> </a>
					<a href="equipe.php"> <li class="col-md-3 menuLi">Equipe</li> </a>
					<a href="downloads.html"> <li class="col-md-3 menuLi">Downloads</li> </a>
					<a href="contato.html"> <li class="col-md-3 menuLi">Contato</li> </a>
				</ul>
			</div>
		</header>	
	<!-- FIM TOPO -->
		<div class ="col-md-offset-2 col-md-8 diferente" >
		<h3>Email dos professores: </h3>

			<ul class="list-group" id="listaEquipe">
			<?php while ($equipe = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) { ?>

				<li class="list-group-item"><span class="badge"><?php echo $equipe['Email'];?></span><a href="<?php echo $equipe['Link']; ?>" target="blank"><?php echo $equipe['Nome']; ?></a></li>

			<?php } ?>	

			</ul>
		
		</div>




	<!-- RODAPÉ -->
	<div class="footer">
		<footer class="col-md-offset-2 col-md-8">
		<br>
			<p>
				Direitos reservados© 2016 LABCIG | Universidade Federal de Santa Catarina - UFSC
			</p>
		</footer>
	</div>
	</div>
	<!-- FIM RODAPÉ -->
	</body>
</html>
