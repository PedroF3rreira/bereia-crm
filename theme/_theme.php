<!DOCTYPE html>
<html lang pt-BR>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="<?=url().'/theme/assets/css/style.css' ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
	<header class="header">
		<div class="main-header container">
			<div class="site-title">
				<div class="logo">
					<img src="<?=url().'/theme/assets/img/logo-bereia.jpg';?>" alt="ad bereia">
				</div>
			</div>
			<nav class="navigation">
				<ul class="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Contato</a></li>
					<li><a href="#">Sobre</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="root-layout">
		<div class="content ">
			<h1><?=SITE;?></h1>
			<?=$this->section('content'); ?>
		</div>
		<aside class="sidebar">
				<h3>dashboard</h3>
				<form style="display:flex;">
					<input type="text" name="nome" placeholder="busque aquio">
					<input type="submit" value="buscar">
				</form>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
				</ul>
			
		</aside>
	</div>
	<footer class="footer">
		<div class="container">
			Todos os direitos reservados <?=SITE; ?>		
		</div>
		
	</footer>
</body>
</html>