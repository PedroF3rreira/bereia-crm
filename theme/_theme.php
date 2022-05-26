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
			<?=$this->section('content'); ?>
		</div>
		<aside class="sidebar">
				<h3>admin menu</h3>
				<form class="search-form">
					<input type="text" name="search" placeholder="pequisar">
					<button type="submit"><span class="material-symbols-sharp">search</span></button>
				</form>
				<ul class="menu-sidebar">
					<li>
						<a href="#">Menbros </a>
						<span class="material-symbols-sharp">
							chevron_right
						</span>
					</li>
					<li>
						<a href="#">Administração </a>
						<span class="material-symbols-sharp">
							chevron_right
						</span>
					</li>
					<li>
						<a href="#">Estudos </a>
						<span class="material-symbols-sharp">
							chevron_right
						</span>
					</li>
					<li>
						<a href="#">Calendário </a>
						<span class="material-symbols-sharp">
							chevron_right
						</span>
					</li>
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