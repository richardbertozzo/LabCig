<?php
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'LabCig';
	$conexao = mysqli_connect($servidor, $usuario, $senha,$banco);

	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

	header("Content-Type: text/html; charset=iso-8859-1",true);
?>