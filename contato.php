<!DOCTYPE html>
<html>
	<head>
		<title>LabCig</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/contato.css">
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
		<br><br>

			<form class="form-horizontal"role="form" action="" method="post">
				<div class="form-group">
	    			<label class="control-label col-sm-2" for="nome">Nome:</label>
	    			<div class="col-sm-10">
		      			<input type="text" class="form-control" name="nome" placeholder="Digite seu nome">	
		   			</div>
	 			</div>
				<div class="form-group">
	    			<label class="control-label col-sm-2" for="email">Email:</label>
		    		<div class="col-sm-10">
		     			<input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
		    		</div>
	  			</div>	
				<div class="form-group">
	   				<label class="control-label col-sm-2" for="email">Mensagem:</label>
		    		<div class="col-sm-10">
		     		 	<textarea class="form-control" rows="5" name="msg"></textarea>
		    		</div>
	 			</div>
				<div class="form-group"> 
		    		<div class="col-sm-offset-2 col-sm-8">
		     			<button type="submit" class="btn btn-default" name="enviar">Enviar</button>
		    		</div>
	  			</div>
			</form>
			<?php
				require('conecta.php');
				if(ISSET($_POST['enviar'])){

					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$msg = $_POST['msg'];

					$sql = "INSERT INTO contato VALUES(
					NULL,
					'$nome', 
					'$email',
					'$msg')";

					mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));
				}
			?>

			<br/>

			<h4> Localização: </h4>
			<p>Bloco A – térreo</p>

		</div>

		<div class="footer">
		<footer class="col-md-offset-2 col-md-8">
		<br>
		<p>
			Direitos reservados© 2016 LABCIG | Universnameade Federal de Santa Catarina - UFSC  
		</p>

		</footer>
		</div>
		</div>

	</body>
</html>