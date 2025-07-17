<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Cadastro</title>
</head>

<body>

	<header>
		<h1>Rota Certa</h1>
		<h3>Cadastros</h3><br>

			<nav class="menu">
				<a href="index.html">Cadastro</a>
			</nav>

	</header>

    <?php

	require_once('conexao.php');

    $nomecompleto=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $idade=$_POST['idade'];
    $desejado=$_POST['desejado'];

	$bancoDados=new db();
	$link=$bancoDados->conecta_mysql();

	$sql="insert into cliente (nomecompleto, cpf, idade, desejado) values('$nomecompleto', '$cpf', '$idade', '$desejado')";

	mysqli_query($link, $sql);

    ?>


	<br>
	<section>
		<h2>CADASTRO</h2>
		<br>
	
        <p>Cadastro realizado com Sucesso!</p>
        <br>
		<a href="index.html" class="botao-voltar"> VOLTAR</a>
    

	</section>
	

</body>
</html>

