<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Meu Imóvel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
       	  	 	 		<li><a href="index.php?pg=categoria">Comprar</a></li>
       	  	 	 		<li><a href="index.php?pg=categoria">Alugar</a></li>
       	  	 	 		<li><a href="index.php?pg=anuncie">Anunciar</a></li>
       	  	 	 		<li><a href="index.php?pg=contato" class="selected">Fale Conosco</a></li>
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
       	  	 			<input type="text" name="usuario" placeholder="E-mail:" class="input-user">
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

       	  	 	<form action="index.php?pg=search" method="POST" name="busca_comum" class="busca-comum">
       	  	 		<input type="text" name="pesquisa" class="busca-comum" placeholder="Busca comum:">
       	  	 		<input type="submit" value="Buscar" name="buscar" class="btn_buscacomum">
       	  	 	</form>

       	  	 </div>
       	  </section>