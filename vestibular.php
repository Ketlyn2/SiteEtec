<!DOCTYPE html>
<html>
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="css/style.css">
    	<script src="https://kit.fontawesome.com/a7648a74b9.js" crossorigin="anonymous"></script>
  		<link rel="sortcut icon" href="img/logo2.png" type="image/png"/>
  		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Etec Prof Emerlinda Giannini Teixeira</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
		?>
		<header class="header header-fixed">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-2">
						<div class="header-logo">
							<p><img src="img/logo2.png" style="width: 45px; height: 40px; margin-right: 5px; ">Centro Paula Souza</p>
						</div>
					</div>
					<div class="col-lg-8 col-md-9">
						<nav class="header_menu">
							<ul>
								<li class="nav-item home"><a href="index.php">Home</a></li>
								<li class="nav-item"><a href="institucional.php">Institucional</a></li>
								<li class="nav-item"><a href="eventos.php">Eventos</a></li>
								<li class="nav-item"><a href="vestibular.php">Vestibulinho</a></li>
								<li class="nav-item"><a href="contato.php">Contato</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-2 col-md-1">
						<div class="header-rigth">
							<div class="header-right-social">
								<a class="link-social" href="https://www.facebook.com/ErmelindaOficial/"><i class="fab fa-facebook-f icon-modify"></i></a>
								<a class="link-social" href="https://www.instagram.com/etec_ermelindaofc/?igshid=a6zwsl85m5vq"><i class="fab fa-instagram icon-modify"></i></a>
								<a class="link-social" href=""><i class="fab fa-twitter icon-modify"></i></a>
								<a class="link-social" href="https://www.linkedin.com/in/etec-professora-ermelinda-giannini-teixeira-085b4419b/"><i class="fab fa-linkedin-in icon-modify"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="section-not section-bg">
			<img src="img/institu.png" style="width: 100%">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-text institu-text">
	                			<h2>Vestibulinho</h2>
							</div> 	
						</div>
					</div>
				</div>
				<div class="bg-banner">
					<img src="img/banner_sharp.png" style="width: 100%;">
				</div>
		</section>

		<section class="concurso">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="concurso-text">
							<img src="img/logo.png">
							<h2><span style="color: #5A424A">Vestibulinho</span></h2>
							<p>Inscrições para o processo seletivo do 1° semestre de 2021 estão abertas para os cursos de Desenvolvimento de Sistema Integrado ao Ensino Médio e no período noturno, Adminitração Integrado ao Ensino Médio e Recursos humanos no período noturno.</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-6">
						<div class="concurso-img">
							<img src="img/vestibular.png">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="concurso-details">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-4">
						<div class="concurso-details-text">
							<img src="img/concurso-date.png">
							<h4>Data da Prova</h4>
							<h5>SEM EXAME</h5>
							<p>Processo Seletivo pelo Histórico Escolar</p>
						</div>
					</div>
					<div class="col-md-5 col-sm-4">
						<div class="concurso-details-text">
							<img src="img/concurso-local.png">
							<h4>Local da Prova</h4>
							<h5>Envio de documentos</h5>
							<p>De 24/11 até as 15h do dia 14/12/2020 - Inscrições para o Processo Seletivo no site vestibulinhoetec.com.br e envio por meio digital, via upload, da documentação comprobatória Valor da taxa de inscrição R$ 19,00 (dezenove reais)</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer" style="background-image: url(img/footer_bg.svg); background-repeat: no-repeat; background-position: top; background-size: cover; ">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer">
						<h4>Menu</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="institucional.php">Institucional</a></li>
							<li><a href="eventos.php">Eventos</a></li>
							<li><a href="vestibular.php">Vestibulinho</a></li>
							<li><a href="contato.php">Contato</a></li>
						</ul>
					</div>
					<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer">
						<h4>Contato</h4>
						<ul>
							<li><a href="">+55 11 4154-7142</a></li>
							<li><a href="">e187acad@cps.sp.gov.br</a></li>
						</ul>
					</div>
					<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer">
						<h4>Endereço</h4>
						<ul>
							<li><a href=""> R. Fernão Dias Falcão, 196 - Centro, Santana de Parnaíba - SP, 06501-120</a></li>
						</ul>
					</div>
					<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer">
						<h4>Horário de Atendimento</h4>
						<ul>
							<li><a href="">Seg. - Sex.: 10hrs - 14hrs</a></li>
							<li><a href="">Sáb. - Dom.: Fechado</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer-name">
							<p><img src="img/layer102.png">Etec Prof Ermelinda Giannini Teixeira</p>
							<p class="footer-text">
								<script>document.write(new Date().getFullYear());</script> | Todos os direitos reservados | Ketlyn && Victor
							</p>
						</div>
					</div>
				</div>
			</div>
			<a id="subirTopo" href=""><i class="fas fa-angle-up"></i></a>

		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function(){

			jQuery("#subirTopo").hide();

			jQuery('a#subirTopo').click(function () {
			         jQuery('body,html').animate({
			           scrollTop: 0
			         }, 800);
			        return false;
			   });

			jQuery(window).scroll(function () {
			         if (jQuery(this).scrollTop() > 1000) {
			            jQuery('#subirTopo').fadeIn();
			         } else {
			            jQuery('#subirTopo').fadeOut();
			         }
			     });
			});
		</script>
	</body>
</html>