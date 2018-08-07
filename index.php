<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Meu Imóvel</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>

	<body>
	   <!-- CONTAINER 	-->
       <div id="container">
       	  <!-- HEADER -->
       	  <header id="cabecalho">
       	  	 <div id="cabecalho-area">

                 <!-- LOGO -->
       	  	 	 <figure class="logo">
       	  	 	 	<img src="images/logo.jpg" alt="logo" class="logo">
       	  	 	 </figure>

       	  	 	 <nav class="menu">
       	  	 	 	<ul>
       	  	 	 		<li><a href="#">Comprar</a></li>
       	  	 	 		<li><a href="#">Alugar</a></li>
       	  	 	 		<li><a href="#">Anunciar</a></li>
       	  	 	 		<li><a href="#" class="selected">Fale Conosco</a></li>
       	  	 	 	</ul>
       	  	 	 </nav>

       	  	 </div>
       	  </header>

       	  <!-- ÁREA DE NAVEGAÇÃO E BUSCA PERSONALIZADA -->
       	  <section id="area-navegacao">
       	  	 <div id="area-navegacao">
       	  	 	
       	  	 	<!-- central do anunciante -->
       	  	 	<div id="central-anunciante">
       	  	 		<h2>Central Do Anunciante</h2>
       	  	 		<form action="" method="POST" name="central_anunciante" class="form-central-anunciante">
       	  	 			<input type="text" name="usuario" placeholder="Usuário:" class="input-user">
       	  	 			<br><br>
       	  	 			<input type="password" name="senha" placeholder="Senha:" class="input-password">
       	  	 			<br>
       	  	 			<input type="submit" value="OK" name="enviar" class="btn-enviar">
       	  	 			<p>[Esqueci minha senha]</p>
       	  	 		</form>
       	  	 	</div>

       	  	 	<!-- anuncie-seu-imovel -->
       	  	 	<div id="anuncie-seu-imovel">
       	  	 		<h2>Anuncie Seu Imovel</h2>
       	  	 		<form action="" method="POST" class="form-central-anunciante">
       	  	 			<br>
       	  	 			<a href="#">Clique Aqui e Anuncie</a>
       	  	 			<br>
       	  	 			<p>Lorem ipsum dolor sit amet, consectetur<br>
       	  	 			   adipiscing elit, sed do eiusmod<br>
       	  	 			   tempor incididunt.</p>
       	  	 		</form>
       	  	 	</div>

                <!-- filtro-avancado -->
       	  	 	<div id="filtro-avancado">
       	  	 		<form action="" method="POST" name="filtrar_avancado" class="form-filtro-avancado">

       	  	 			<h2>Encontre seu imóvel</h2>

       	  	 			<select name="tipo" class="select-1">
       	  	 				<option value="">Comprar ou alugar?</option>
       	  	 				<option value="">Alugar</option>
       	  	 				<option value="">Comprar</option>
       	  	 			</select>

       	  	 			<select name="categoria" class="select-2">
       	  	 				<option value="" disabled="disabled">Categoria do Imóvel?</option>
       	  	 			</select>

       	  	 			<select name="bairro" class="select-3">
       	  	 				<option value="" disabled="disabled">Selecione o bairro</option>
       	  	 			</select>

       	  	 			<select name="cômodos" class="select-4">
       	  	 				<option value="" disabled="disabled">Preferência de cômodos</option>
       	  	 			</select>

       	  	 			<span class="text-filtramos">Filtramos: 255 Imóveis</span>

       	  	 			<input type="submit" value="Listar Imóveis" name="listar" class="btn-listar">

       	  	 		</form>
       	  	 	</div>

       	  	 	<!-- publicidade -->
       	  	 	<div id="publicidade-1">
       	  	 		<figure class="publicidade_1">
       	  	 			<img src="images/publicidade_1.jpg" alt="publicidade-1" class="img">
       	  	 		</figure>
       	  	 	</div>

       	  	 </div>
       	  </section>

       	  <!-- BUSCA COMUM -->
       	  <section id="busca-comum">
       	  	 <div id="busca-comum">

       	  	 	<form action="" method="POST" name="busca_comum" class="busca-comum">
       	  	 		<input type="text" name="s" class="busca-comum" placeholder="Busca comum:">
       	  	 		<input type="submit" value="Buscar" name="buscar" class="btn_buscacomum">
       	  	 	</form>

       	  	 </div>
       	  </section>

       	  <!-- LISTA -->
       	  <section id="lista">
       	  	<article id="lista">

                <!-- LISTA 1 -->
       	  		<ul class="lista_um">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<!-- LISTA 2 -->
       	  		<ul class="lista_dois">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<!-- LISTA 3 -->
       	  		<ul class="lista_tres">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<!-- LISTA 4 -->
       	  		<ul class="lista_quatro">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<!-- LISTA 5 -->
       	  		<ul class="lista_cinco">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<!-- LISTA 6 -->
       	  		<ul class="lista_seis">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<!-- LISTA 7 -->
       	  		<ul class="lista_sete">
       	  			<li>
       	  				<figure class="lista-img">
       	  					<img src="images/" alt="" class="lista-img">
       	  					<br>
       	  					<h2>Imóvel 1</h2>
       	  					<br>
       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
       	  					<br>
       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
       	  				</figure>
       	  			</li>
       	  		</ul>

       	  		<figure class="banner-anuncie">
       	  			<a href="#"><img src="images/anuncie.jpg" alt="anuncie" class="anuncie"></a>
       	  		</figure>

                <!-- LISTA RELACIONADA -->
       	  		<div id="lista-relacionada">

       	  			<!-- LISTA RELACIONADA 1 -->
	       	  		<ul class="lista_rel_1">
	       	  			<li>
	       	  				<figure class="lista-rel-img">
	       	  					<img src="images/" alt="" class="lista-img">
	       	  					<br>
	       	  					<h2>Imóvel 1</h2>
	       	  					<br>
	       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
	       	  					<br>
	       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
	       	  				</figure>
	       	  			</li>
	       	  		</ul>

	       	  		<!-- LISTA RELACIONADA 2 -->
	       	  		<ul class="lista_rel_2">
	       	  			<li>
	       	  				<figure class="lista-rel-img">
	       	  					<img src="images/" alt="" class="lista-img">
	       	  					<br>
	       	  					<h2>Imóvel 1</h2>
	       	  					<br>
	       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
	       	  					<br>
	       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
	       	  				</figure>
	       	  			</li>
	       	  		</ul>

	       	  		<!-- LISTA RELACIONADA 3 -->
	       	  		<ul class="lista_rel_3">
	       	  			<li>
	       	  				<figure class="lista-rel-img">
	       	  					<img src="images/" alt="" class="lista-img">
	       	  					<br>
	       	  					<h2>Imóvel 1</h2>
	       	  					<br>
	       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
	       	  					<br>
	       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
	       	  				</figure>
	       	  			</li>
	       	  		</ul>

	       	  		<!-- LISTA RELACIONADA 4 -->
	       	  		<ul class="lista_rel_4">
	       	  			<li>
	       	  				<figure class="lista-rel-img">
	       	  					<img src="images/" alt="" class="lista-img">
	       	  					<br>
	       	  					<h2>Imóvel 1</h2>
	       	  					<br>
	       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
	       	  					<br>
	       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
	       	  				</figure>
	       	  			</li>
	       	  		</ul>

	       	  		<!-- LISTA RELACIONADA 5 -->
	       	  		<ul class="lista_rel_5">
	       	  			<li>
	       	  				<figure class="lista-rel-img">
	       	  					<img src="images/" alt="" class="lista-img">
	       	  					<br>
	       	  					<h2>Imóvel 1</h2>
	       	  					<br>
	       	  					<p>Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit</p>
	       	  					<br>
	       	  					<a href="#" class="btn-veja-mais">Veja Mais</a>
	       	  				</figure>
	       	  			</li>
	       	  		</ul>
       	  			
       	  		</div>

                <!-- BANNER INFERIOR -->
       	  		<div id="banner-inferior">
       	  			<figure class="banner-inferior">
       	  				<img src="" alt="banner-inferior">
       	  			</figure>
       	  		</div>
       	  		
       	  	</article>
       	  </section>

       	  <!-- RODAPÉ -->
       	  <footer id="rodapé">
       	  	 <div id="rodapé">
       	  	 	
       	  	 </div>
       	  </footer>


       </div>
	</body>
</html>