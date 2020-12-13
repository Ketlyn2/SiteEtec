<!DOCTYPE html>
<html lang="pt-br">

    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="css/style.css">
    	<script src="https://kit.fontawesome.com/a7648a74b9.js" crossorigin="anonymous"></script>
  		<link rel="sortcut icon" href="img/logo2.png" type="image/png"/>
		<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"  crossorigin="anonymous">
		<title>ETEC Prof Emerlinda Giannini Teixeira</title>
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

		<section class="section section-bg" data-setbg="img/folder5.png" style="background: url(img/folder5.png); background-repeat: no-repeat;  margin-top: 70px;  background-size: cover; background-position: top;">
				<div class="container-fluid">
					<div class="section-container">
						<img src="img/layer102.png" alt="">
						<div class="section-text">
							<h5>ETEC Prof Emerlinda Giannini Teixeira</h5>
	                		<h2>Seja bem vindo!</h2>
	               			<p>Fique a vontade para conhecer a nossa história, nossa equipe e nossos alunos.
							   Juntos construimos uma ETEC mais forte!</p>
	               			<a href="institucional.php" class="btn btn-login">Leia mais</a>
						</div> 	
					</div>
				</div>
				<div class="img-banner">
					<img src="img/banner_sharp.png">
				</div>
		</section>

		<section class="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img">
							<img src="img/about.png">
						</div>
					</div>
					<div class="col-md-5">
						<div class="about-text">
							<img src="img/logo.png">
							<h2><span style="color: #5A424A;"> Unidade Santana de Parnaíba</span></h2>
							<p>A Etec "Profª. Ermelinda Giannini Teixeira" localiza-se no centro histórico do município de Santana Parnaíba, maior núcleo urbano em taipa, tombado em 1982 pelo Conselho de Defesa do Patrimônio Histórico, Arqueológico, Artístico e Turístico (CONDEPHAAT), do Estado de São Paulo...</p>
							<a href="institucional.php" class="btn btn-sobre">Leia mais</a>
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
						<div class="services-title" style="text-align: center;">
							<h2><span style="color: #5A424A;">Diferenciais</span></h2>
							<img class="bg-icon" src="img/icon.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="services-item">
							<img src="img/icon-form.png">
							<h4>Formação baseada em valores</h4>
							<p>Somos comprometidos com o que cada aluno tem de melhor, seus valores! Acreditamos na transformação do futuro através dos bons valores. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="services-item">
							<img src="img/icon-curs.png">
							<h4>Cursos Técnicos</h4>
							<p>Oferecemos cursos técnicos profissionalizantes das áreas que estão em alta no mercado de trabalho.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="services-item">
							<img src="img/icon-teacher.png">
							<h4>Corpo Docente</h4>
							<p>Professores altamente capacitados e experientes; comprometidos em formar, além de bons alunos, indivíduos conscientes e capazes de resolver desafios, impactando o mundo a sua volta.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="services-item">
							<img src="img/icon-eye.png">
							<h4>Olhar Humanista</h4>
							<p>O olhar acolhedor que nossa equipe tem em relação aos alunos mostra a preocupação de todos os educadores da escola em observar, acompanhar e ajudar o aluno a superar suas dificuldades, a enfrentar desafios e a desenvolver seu potencial.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="services-item">
							<img src="img/icon-user.png">
							<h4>Atendimento Individualizado</h4>
							<p>Reuniões periódicas entre Coordenação Educacional e pais ou responsáveis, para acompanhar o desenvolvimento escolar e social do aluno, com orientações individualizadas.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="services-item">
							<img src="img/icon-school.png">
							<h4>Novo Edifício</h4>
							<p>Está sendo construido um novo edíficio para escola com melhor estrutura para os nossos alunos.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="concurso">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="concurso-text">
							<img src="img/logo.png" style="width: 45px; height: 40px;">
							<h2><span style="color: #5A424A">Vestibulinho </span></h2>
							<p>Quer estudar em nossa escola e se tornar um etequiano ?<br> Aproveita que as inscrições para o processo seletivo estão abertas, e será por histórico escolar, ou seja, não irá ter prova!!!</p>
							<a href="vestibular.php" class="btn btn-concurso">Saiba mais</a>
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

		<section class="coment">
			<img src="img/coment1.png" style="width: 100%; position: absolute;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="cliente-coment owl-carousel">
							<div class="slides">
								<input type="radio" name="radio-btn" id="radio1">
								<input type="radio" name="radio-btn" id="radio2">
								<input type="radio" name="radio-btn" id="radio3">
								<input type="radio" name="radio-btn" id="radio4">
							
								<div class="slide first">
									<div class="owl-item copy">
										<div class="single-comment" style="text-align: center;">
											<img src="img/coment-bg1.png">
											<h4>"Passando para parabenizar a coordenação e toda sua equipe, a ETEC não está deixando nada a desejar no ensino a distância. Parabéns por tudo!!"</h4>
											<p>- Fabíola Aráujo</p>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="owl-item copy">
										<div class="single-comment" style="text-align: center;">
											<img src="img/comment-bg2.png">
											<h4>"Muito obrigada pelo excelente ensino e equipe! Meus filhos adoram a escola e estão aprendendo muito."</h4>
											<p>- Carla Biscaino</p>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="owl-item copy">
										<div class="single-comment" style="text-align: center;">
											<img src="img/comment-bg4.png">
											<h4>"Belissimo trabalho ! Parabéns pela agilidade e evolução nesse período de pandemia."</h4>
											<p>-Cristiano Aparecido </p>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="owl-item copy">
										<div class="single-comment" style="text-align: center;">
											<img src="img/comment-bg3.png">
											<h4>"Ótimo ensino, ótima equipe pedagógica. Parabens !"</h4>
											<p>- Marcos Vilela</p>
										</div>
									</div>
								</div>
								<div class="navigation-auto">
									<div class="auto-btn1"></div>
									<div class="auto-btn2"></div>
									<div class="auto-btn3"></div>
									<div class="auto-btn4"></div>
								</div>
							</div>							
						</div>
					</div>
				</div>
 			</div>
		</section>

		<script type="text/javascript">
			var counter = 1;
			setInterval(function() {
				document.getElementById('radio' + counter).checked = true;
				counter ++;
				if(counter > 4) {
					counter = 1;
				}
			}, 5000);
		</script>

		<section class="social">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="social-text">
							<h2><span style="color: #5A424A">Redes Sociais </span></h2>
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
