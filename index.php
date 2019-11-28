<?php

//Incluindo o arquivo de conexao com o banco de dados
require_once("config/conexao_bd.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto WebService 2019</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid.css">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-600.css" media="screen and (max-width:600px)">
</head>
<body>

	<div id="container">

		<div id="header">
			<img align="center" src="https://i.imgur.com/qm2Ku2e.png">
		</div>

		<div id="menu">
			<ul>
				<li><a class="btn btn-primary" role="button" href="?pg=inicio">Início</a></li>
				<li><a class="btn btn-primary" role="button" href="?pg=sobre">Sobre</a></li>
				<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
				<li><a class="btn btn-primary" role="button" href="?pg=listagem">Listagem</a></li>
			</ul>
		</div>		

		<div id="main">
			<div id="menu-lateral">
				<ul>
					<li><a class="btn btn-primary" role="button" href="?pg=inicio">Início</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=listagem">Listagem</a></li>
				</ul>				
			</div>
			<div id="content">
				<p align="justify">Automóvel (do grego αὐτός ["autós"], "por si próprio", e do latim mobilis, "mobilidade", como referência a um objecto responsável pela sua própria locomoção) ou carro (das línguas celtas, através do latim carru) é um veículo motorizado com rodas usado para transporte. A maioria das definições de carro diz que eles correm basicamente em estradas, acomodam de uma a oito pessoas, têm quatro pneus e, principalmente, transportam pessoas em vez de mercadorias.</p>
			</div>	
			<div id="menu-lateral-direita">
				<ul>
					<li><a class="btn btn-primary" role="button" href="?pg=inicio">Início</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=listagem">Listagem</a></li>
				</ul>
			</div>	
		</div>

		<?php

		if(isset($_GET["pg"])){
			$pagina = $_GET["pg"];
		}
		else{
			$pagina = "inicio";
		}				

		include("paginas/".$pagina.".php");

		?>

		<div id="footer">
			<p>Todos os direitos reservados</p>
		</div>
		
	</div>

</body>
</html>