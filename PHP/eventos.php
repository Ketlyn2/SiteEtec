

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<link rel="stylesheet" href="../css/style.css">
   	<script src="https://kit.fontawesome.com/a7648a74b9.js" crossorigin="anonymous"></script>
    <link rel="sortcut icon" href="../img/logo2.png" type="image/png"/>
    
    <title>CRIAR EVENTO</title>
</head>
<body>
	<?php
        require "verifica.php";
    ?>

	<div class="hero">
		<img src="../img/hero4.png">
		<div class="form-boxing">
			<div class="menu">
				<ul>
					<li><a href="#">Criar evento</a></li>
					<li><a href="../eventos.php">Ver eventos ativos</a></li>
					<li><a href="editEvento.php">Editar Eventos</a></li>
				</ul>
			</div>
	    	<form id="cadastrar" action="cadevento.php"method="POST" class="input-group">
				<input type="text" name="cadevento" class="input-field" placeholder="Nome do Evento">
				<h4>Data final do evento</h4>
				<input type="date" name="caddata" class="input-field" placeholder="Data final do Evento">
				<input type="email" name="cadprof" class="input-field" placeholder="Dono do Evento (Email)">
				<input type="text" name="cadesc" class="input-field" placeholder="Insira uma descrição">
				<input type="file" name="cadimg" class="input-field" >
				<input type="submit" name="cadastrar" class="submit-btn" value="CADASTRAR">
			</form>
			<form id="sair" action="verificaLogin.php" method="POST" class="input-sair">
				<input type="submit" name="sair" class="btn-sair" value="SAIR">
			</form>
		</div>
	</div>
	
</body>
</html>