<?php
//conecta banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$conexao = mysqli_connect($servidor, $usuario, $senha ) 
or  die (mysqli_error($conexao));	


//cria o banco SE não existir
$sql = "CREATE DATABASE IF NOT EXISTS 	labcig_db";

$resultado = mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));


//seleciona o banco
$banco = "labcig_db";
mysqli_set_charset($conexao,'utf8');
mysqli_select_db($conexao, $banco);


//cria a tabela com os caminhos
$sql = "CREATE TABLE IF NOT EXISTS 	caminho_relativo(
	idCaminho int(2) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	caminho varchar(100),
	titulo varchar(100)
	)";
	
mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));

//verificando se a tabela está vazia
$sql = "SELECT idCaminho FROM caminho_relativo";
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
$linhas = mysqli_affected_rows($conexao);
if($linhas == 0){

	//inserindo os caminhos no banco
	$sql = "INSERT INTO caminho_relativo (idCaminho, 
		caminho, titulo) VALUES
		(NULL, './downloads/ConceitosGPS.zip','Conceitos básicos sobre GPS'),
		(NULL, './downloads/Controle_de_recalque_flecha.zip','Aula de controle de recalque e flecha'),
		(NULL, './downloads/Manual_do_Teodolito_Digital_Eth_50_Zeiss.pdf','Manual do Teodolito Digital Eth 45 Zeiss'),
		(NULL, './downloads/Manual_Nivel_Laser.pdf','Manual Rápido Nível a Laser'),
		(NULL, './downloads/Manual_Planimetro_Digital.pdf','Manual Rápido Planímetro Digital Haff'),
		(NULL,'./downloads/leituras_de_angulo.jpg','Leituras de ângulo no teodolito'),
		(NULL, './downloads/Manual_Rapido_Estacao_Total_Zeiss_Elta_R_2.pdf','Manual Rápido Estação Total Zeiss Elta R 2'),
		(NULL, './downloads/PROCESSAMENTO_DOS_DADO_DE_GPS.pdf','Processamento dos dados de GPS'),
		(NULL, './downloads/Roteiro_instalacao_Teodolito.pdf','Roteiro de instalação do Teodolito'),
		(NULL, './downloads/topo1.zip','Apostila Topografia I'),
		(NULL, './downloads/topo2.zip','Apostila Topografia II')";

	mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));
}


//criando tabela com dados equipe
$sql = "CREATE TABLE IF NOT EXISTS 	equipe(
	id int(2) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nome varchar(50),
	email varchar(50),
	link varchar(100)
	)"; 

mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));


//verificando se a tabela está vazia
$sql = "SELECT id FROM equipe";
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
$linhas = mysqli_affected_rows($conexao);
if($linhas == 0){

	//inserindo dados equipe
	$sql = "INSERT INTO equipe VALUES
		(NULL,'Ana Maria Bencciveni Franzoni', 'franzoni@ecv.ufsc.br', 'http://lattes.cnpq.br/9547378691159321'),
		(NULL,'Carlos Loch', 'ecv1clo@ecv.ufsc.br', 'http://lattes.cnpq.br/1573696350142408'),
		(NULL,'Cláudio Cesar Zimmermann', 'claudio.ufsc@gmail.com', 'http://buscatextual.cnpq.br/buscatextual/'),
		(NULL,'Dora Maria Orth', 'ecv1dmo@ecv.ufsc.br', 'http://lattes.cnpq.br/9692479842063012'),
		(NULL,'Edesio Elias Lopes', '', 'http://lattes.cnpq.br/8410342213757135'),
		(NULL,'Jürgen Wilhelm Philips', 'jphilips@gmx.net', 'http://lattes.cnpq.br/7496095027894017'),
		(NULL,'Lia Caetano Bastos', 'lia@ecv.ufsc.br', 'http://lattes.cnpq.br/7383221421443606'),
		(NULL,'Sálvio José Vieira', 'ecv8sjv@ecv.ufsc.br', 'http://lattes.cnpq.br/3986651158264695')";

	mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));
}
$sql = "CREATE TABLE IF NOT EXISTS 	contato(
	id int(2) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nome varchar(50),
	email varchar(50),
	mensagem text
	)"; 

mysqli_query($conexao, $sql) or exit(mysqli_error($conexao));
?>