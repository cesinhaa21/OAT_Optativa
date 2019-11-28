<?php

$actionEditar = "";
$id = 0;
$nome = NULL;
$email = NULL;
$senha = NULL;

if (isset($_GET["editar"])) {
	$id = $_GET["editar"];
	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		$nome = $row["nome"];
		$email = $row["email"];
		$senha = $row["senha"];
	}
	else{
		echo "Falha ao carregar registro!";
	}
	$actionEditar = "&editar=$id";
}

?>

<h2>Cadastro</h2>

<div class="row">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">

		<form action="?pg=processar<?= $actionEditar ?>" method="POST">
		<div class="form-group">
		    <label for="inputNome">Carro</label>
		    <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite a marca do carro" value="<?= $nome ?>">		    
		 </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Ano</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite o ano do carro" value="<?= $email ?>">		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Marca</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite a marca do carro" value="<?= $senha ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</div>

	<div class="col-md-3">
	</div>
</div>