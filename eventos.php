<!DOCTYPE html>
<html lang="pt-br">
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
			include_once 'PHP/conexao.php';
			session_start();
			session_destroy();

			$sql = "SELECT TB_EVENTO_IMG,
							TB_EVENTO_DT,
							TB_EVENTO_NOME,
							TB_EVENTO_DESC,
							TB_USER_NOME
					FROM TB_EVENTO 
					INNER JOIN TB_USUARIO 
					ON TB_EVENTO.TB_EVENTO_DONO = TB_USUARIO.TB_USER_EMAIL
					WHERE TB_EVENTO_ID = 1;";
			$result = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_row($result);

			$sql2 = "SELECT TB_EVENTO_IMG,
							TB_EVENTO_DT,
							TB_EVENTO_NOME,
							TB_EVENTO_DESC,
							TB_USER_NOME
					FROM TB_EVENTO 
					INNER JOIN TB_USUARIO 
					ON TB_EVENTO.TB_EVENTO_DONO = TB_USUARIO.TB_USER_EMAIL
					WHERE TB_EVENTO_ID = 2;";
			$result = mysqli_query($conexao, $sql2);
			$dados2 = mysqli_fetch_row($result);

			$sql3 = "SELECT TB_EVENTO_IMG,
							TB_EVENTO_DT,
							TB_EVENTO_NOME,
							TB_EVENTO_DESC,
							TB_USER_NOME
					FROM TB_EVENTO 
					INNER JOIN TB_USUARIO 
					ON TB_EVENTO.TB_EVENTO_DONO = TB_USUARIO.TB_USER_EMAIL
					WHERE TB_EVENTO_ID = 3;";
			$result = mysqli_query($conexao, $sql3);
			$dados3 = mysqli_fetch_row($result);


			
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
	                			<h2>Eventos</h2>
							</div> 	
						</div>
					</div>
				</div>
				<div class="bg-banner">
					<img src="img/banner_sharp.png" style="width: 100%;">
				</div>
		</section>

		<section class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-5 mb-lg-0">
						<div class="blog-left">

							<article class="blog-item">
								<div class="blog-item-img">

									<!-- INSERIR A IMAGEM -->
									<img src="img/blog1.jpg">

									<!-- INSERIR A DATA -->
									<a href="#" class="blog-item-data">
										<h3><?php print_r($dados[1]= implode("/",array_reverse(explode("-",$dados[1]))));?></h3>
									</a>
								</div>
								<div class="blog-item-text">
									<!-- NOME -->
									<h2><?php print_r($dados[2]);
									?></h2>

									<!-- DESCRIÇÃO -->
									<p><?php print_r($dados[3]); ?></p>
									
									<!-- CRIADOR DO EVENTO -->
									<ul class="blog-info-link">
										<li><?php print_r($dados[4]); ?></li>
									</ul>
								</div>
							</article>

							<article class="blog-item">
								<div class="blog-item-img">

									<!-- INSERIR IMAGEM  -->
									<img src="img/blog3.jpg">

									<!-- INSERIR DATA -->
									<a href="#" class="blog-item-data">
										<h3><?php print_r($dados2[1]= implode("/",array_reverse(explode("-",$dados2[1]))));?></h3>
									
									</a>
								</div>
								<div class="blog-item-text">

									<!-- INSERIR NOME EVENTO  -->
									<h2><?php print_r($dados2[2]);?></h2>

									<!-- INSERIR DESC EVENTO -->
									<p><?php print_r($dados2[3]); ?></p>
									
									<!-- INSERIR CRIADOR EVENTO -->
									<ul class="blog-info-link">
										<li><?php print_r($dados2[4]); ?></li>
									</ul>
								</div>
							</article>
							<article class="blog-item">
								<div class="blog-item-img">
									
								<!-- INSERIR IMAGEM  -->
								<img src="img/blog2.jpg">

								<!-- INSERIR DATA -->
								<a href="#" class="blog-item-data">
										<h3><?php print_r($dados3[1]= implode("/",array_reverse(explode("-",$dados3[1]))));?></h3>
									</a>
								</div>
								<div class="blog-item-text">

									<!-- INSERIR NOME EVENTO  -->
									<h2><?php print_r($dados3[2]);?></h2>

									<!-- INSERIR DESC EVENTO -->
									<p><?php print_r($dados3[3]); ?></p>
									
									<!-- INSERIR CRIADOR EVENTO -->
									<ul class="blog-info-link">
										<li><?php print_r($dados3[4]); ?></li>
									</ul>
								</div>
							</article>
							<nav class="blog-pag justify-content-center d-flex">
								<ul class="pagination">
									<li class="page-item">
										<a href="#" class="page-link">
											<i class="fas fa-angle-left"></i>
										</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">1</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">2</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">
											<i class="fas fa-angle-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="blog-right">
							<div class="single-blog search">
								<form>
									<div class="form-group">
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Pesquisar palavra-chave">
											<div class="input-group-append">
												<button class="btn" type="button">
													<i class="fas fa-search"></i>
												</button>
											</div>	
										</div>
									</div>
									<a href="#" class="btn-search" type="submit">Pesquisar</a>
								</form>
							</div>
							<div class="single-blog post-category">
								<h4 class="single-blog-title">Categoria</h4>
								<ul class="list cat-list">
									<li>
										<a href="#">
											<p>TCC administração(2)</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>TCC desenvolvimento de sistemas(3)</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>TCC Recursos Humanos</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Aprovados 2021(40)</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Aniversariantes(6)</p>
										</a>
									</li>
									<li>
										<a href="#">
											<p>Projetos(5)</p>
										</a>
									</li>
								</ul>
							</div>
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