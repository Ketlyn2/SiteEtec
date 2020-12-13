<?php
        session_start();
        session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    	<link rel="stylesheet" href="css/style.css">
	    	<script src="https://kit.fontawesome.com/a7648a74b9.js" crossorigin="anonymous"></script>
	  		<link rel="sortcut icon" href="img/logo2.png" type="image/png"/>
	  		
			<title>ETEC Prof Emerlinda Giannini Teixeira</title>
	</head>
	<body>

		<div class="hero">
			<img src="img/hero4.png">
			<div class="form-box">
				<div class="button-box">
					<div id="btn"></div>
					<button id="log" type="button" class="toggle-btn" onclick="Login()">Login</button>
					<button style="color: #000;" id="cad" type="button" class="toggle-btn" onclick="Cadastrar()">Cadastrar</button>
				</div>
				<div class="social-icons">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-linkedin-in"></i></a>
					<a href=""><i class="fab fa-google"></i></a>
				</div>

				<form id="login" 
					  action="PHP/verificaLogin.php"
					  method="POST" 
					  class="input-group" 
					  style="top: 180px;">
					<input type="email" name="email" class="input-field" placeholder="Email" maxlength="128">
					<input type="password" name="password" class="input-field" placeholder="Senha" maxlength="32">

					<?php
						if(isset($_SESSION['nao_autorizada'])){
					?>

					<p> error: email ou senha incorretos</p>

					<?php
						}
						unset($_SESSION['nao_autorizada']);
					?>

					<input type="checkbox" name="" class="check-box"><span class="span">Lembrar da Senha?</span>
					<input type="submit" name="login" class="submit-btn" value="LOGIN">
				</form>

				<form id="cadastrar" 
					  action="PHP/cadastro.php"
					  method="POST" 
					  class="input-group">
					<input type="text" name="cadnome" class="input-field" placeholder="Username" maxlength="64">
					<input type="email" name="cademail" class="input-field" placeholder="Email" maxlength="128">
					<input type="password" name="cadpass" class="input-field" placeholder="Senha" maxlength="32">
					<input type="checkbox" name="" class="check-box"><span class="span">Eu li e concordo com os termos.</span>
					<input type="submit" id="cadbtn" name="cadastrar" class="submit-btn" value="CADASTRAR" onclick="btnCad()">
				</form>
			</div>
		</div>

		<script type="text/javascript">
			var login = document.getElementById("login");
			var register = document.getElementById("cadastrar");
			var btn = document.getElementById("btn");
			var log = document.getElementById("log");
			var cad = document.getElementById("cad");
			var btnCad = document.getElementById("cadbtn");

			function Cadastrar() {
				login.style.left = "-400px";
				register.style.left = "50px";
				btn.style.left = "110px";
				log.style.color = "#000";
				cad.style.color = "#fff";
			}

			function Login() {
				login.style.left = "50px";
				register.style.left = "450px";
				btn.style.left = "0px";
				log.style.color = "#fff";
				cad.style.color = "#000";
			}

			function btnCad() {
				login.style.left = "50px";
				register.style.left = "450px";
			}

		</script>
	</body>
</html>