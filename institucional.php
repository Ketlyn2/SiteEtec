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
	                			<h2>Sobre Nós!</h2>
							</div> 	
						</div>
					</div>
				</div>
				<div class="bg-banner">
					<img src="img/banner_sharp.png" style="width: 100%;">
				</div>
		</section>

		<section class="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img img-inst">
							<img src="img/about.png">
						</div>
					</div>
					<div class="col-md-5">
						<div class="inst-text">
							<img src="img/logo.png">
							<h2><span style="color: #5A424A;"> Unidade Santana de Parnaíba</span></h2>
							<p>A Etec "Profª. Ermelinda Giannini Teixeira" localiza-se no centro histórico do município de Santana Parnaíba, maior núcleo urbano em taipa, tombado em 1982 pelo Conselho de Defesa do Patrimônio Histórico, Arqueológico, Artístico e Turístico (CONDEPHAAT), do Estado de São Paulo.</p>
							<p>Iniciamos nossas atividades, como sala descentralizada da ETEC de São Roque, na data de 24 de julho de 2008, oferecendo os cursos de logística e informática, ambos nos períodos vespertino e noturno.</p>
							<p>Em 19 de setembro de 2008, a Etec tornou-se unidade autônoma, contando na Direção com a Professora Roseli Barna Christo de Camargo.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services spad">
			<img class="bg-services" src="img/services_bg.svg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="services-title inst-title" style="text-align: center;">
							<h2><span style="color: #5A424A;">Nossa Equipe </span></h2>
							<img class="bg-icon" src="img/icon.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4  col-sm-6">
						<div class="services-item cardi middle">
							<div class="front">
								<img src="img/equipe5.png"> 
							</div>
							<div class="back">
								<div class="back-content middle">
									<h2>Renato Willians</h2>
									<span>Diretor</span>
									<div class="sm">
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4  col-sm-6">
						<div class="services-item cardi middle">
							<div class="front">
								<img src="img/equipe2.png"> 
							</div>
							<div class="back">
								<div class="back-content middle">
									<h2>Geovana Alves</h2>
									<span>Coordenadora Pedagógico</span>
									<div class="sm">
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="services-item cardi middle">
							<div class="front">
								<img src="img/equipe3.png"> 
							</div>
							<div class="back">
								<div class="back-content middle">
									<h2>André Pereira</h2>
									<span>Coordenador do Ensino Médio</span>
									<div class="sm">
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="services-item cardi middle">
							<div class="front">
								<img src="img/equipe6.png"> 
							</div>
							<div class="back">
								<div class="back-content middle">
									<h2>Rafaela Mirian</h2>
									<span>Coordenadora do curso de Desenvolvimento de Sistemas</span>
									<div class="sm">
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="services-item cardi middle">
							<div class="front">
								<img src="img/equipe1.png"> 
							</div>
							<div class="back">
								<div class="back-content middle">
									<h2>Maria Cecília</h2>
									<span>Coordenador do curso<br> de administração</span>
									<div class="sm">
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="services-item cardi middle">
							<div class="front">
								<img src="img/equipe4.png"> 
							</div>
							<div class="back">
								<div class="back-content middle">
									<h2>Pedro Silva</h2>
									<span>Coordenador dos cursos de Gestão (Noturno)</span>
									<div class="sm">
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="cursos-texto">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="cursos-tex">
							<img src="img/logo.png">
							<h2><span style="color: #5A424A">Cursos oferecidos </span></h2>
							<p>Atualmente oferecemos os cursos de Desenvolvimento de Sistemas(integrado ao ensino médio e no período noturno), Administração (apenas integrado ao ensino médio) e Recursos Humanos(apenas no período noturno). </p>
						</div>
					</div>
					<div class="col-lg-5 col-md-6">
						<div class="curso-img">
							<img src="img/cursos-img.png">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="cursos">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cursos-title">
							<h2><span style="color: #5A424A;">Cursos </span></h2>
							<img class="bg-icon" src="img/icon.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="cursos-items">
							<img src="img/cursos2.png">
							<div class="overlay overlay-color overlayBottom">
									<h3  style="margin-top: -10px;">Administração</h3>
									<p>Esse curso tem o objetivo de formar profissionais capacitados a executar diversas funções de apoio em uma empresa, principalmente as que envolvam administração financeira, processos logísticos e gestão de recursos humanos. Ao todo oferecemos 40 vagas para o período manhã e tarde.
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="cursos-items">
							<img src="img/cursos1.png">
							<div class="overlay overlay-color overlayBottom">
									<h3  style="margin-top: -17px;">Desenvolvimento de Sistemas</h3>
									<p>Esse curso tem por objetivo habilitar profissionais para analisar requisitos funcionais e não-funcionais de produtos, desenvolver e testar sistemas de software, de acordo com as especificações do projeto. Ao todo oferecemos 80 vagas.
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="cursos-items">
							<img src="img/cursos3.png">
							<div class="overlay overlay-color overlayBottom">
									<h3 style="margin-top: -10px;">Recursos Humanos</h3>
									<p>Esse curso tem a responsabilidade de desenvolver trabalhos nas áreas de seleção e recrutamento, treinamento e desenvolvimento, remuneração e benefícios. Ele fará o controle das atividades dos funcionários. Ao todo oferecemos 40 vagas.
									</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="social inst-social">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="social-text">
							<h2><span style="color: #5A424A">Redes Sociais</span></h2>
							<img src="img/icon.png">
						</div>
						<div class="social-midia">
						<a href="https://www.facebook.com/ErmelindaOficial/"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/etec_ermelindaofc/?igshid=a6zwsl85m5vq"><i class="fab fa-instagram"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href="https://www.linkedin.com/in/etec-professora-ermelinda-giannini-teixeira-085b4419b/"><i class="fab fa-linkedin-in"></i></a>
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