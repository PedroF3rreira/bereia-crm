<!--Camada do layout-->
<?php $this->layout('_template', [
	'title' => $title,
	'user_name' => $user_name
]); ?>

<!--Seção principal da pagina-->

<?php $this->start('page') ?>
<!-- Content Row -->
<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						Menbros cadastrados </div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?=$menbers_number ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
						Renda (Mensal)</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">R$215,000</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tarefas concluidas
						</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30%</div>
							</div>
							<div class="col">
								<div class="progress progress-sm mr-2">
									<div class="progress-bar bg-info" role="progressbar"
									style="width: 50%" aria-valuenow="50" aria-valuemin="0"
									aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
						Tarefas pendentes</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-comments fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->stop() ?>


<!--Seção sidebar da pagina-->

<?php $this->start('sidebar') ?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=url();?>">
		<div class="sidebar-brand-icon w-25">
			<img class="img-fluid " src="<?=url().'/theme/img/logo-bereia.png' ?>" alt="Logo">
		</div>
		<div class="sidebar-brand-text mx-3">AD Beréia</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?=url();?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Painel Admin</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-users"></i>
			<span>Menbros</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Gerenciar menbros:</h6>
				<a class="collapse-item" href="buttons.html">Cadastrar</a>
				<a class="collapse-item" href="cards.html">Atualizar</a>
				<a class="collapse-item" href="cards.html">Excluir</a>
				<a class="collapse-item" href="cards.html">Relatórios</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
		aria-expanded="true" aria-controls="collapseUtilities">
		<i class="fas fa-fw fa-coins"></i>
		<span>Finanças</span>
	</a>
	<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
	data-parent="#accordionSidebar">
	<div class="bg-white py-2 collapse-inner rounded">

		<h6 class="collapse-header">Entradas:</h6>
		<a class="collapse-item" href="utilities-color.html">Dízimos</a>
		<a class="collapse-item" href="utilities-border.html">Ofertas</a>
		<a class="collapse-item" href="utilities-animation.html">Doações</a>

		<h6 class="collapse-header">Saídas:</h6>
		<a class="collapse-item" href="utilities-color.html">Manutenção</a>
		<a class="collapse-item" href="utilities-border.html">Comprar equipamentos</a>
		<a class="collapse-item" href="utilities-animation.html">Ação social</a>

	</div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	Calendário e tarefas
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
	aria-expanded="true" aria-controls="collapsePages">
	<i class="fas fa-fw fa-folder"></i>
	<span>Pages</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
	<div class="bg-white py-2 collapse-inner rounded">
		<h6 class="collapse-header">Login Screens:</h6>
		<a class="collapse-item" href="login.html">Login</a>
		<a class="collapse-item" href="register.html">Register</a>
		<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
		<div class="collapse-divider"></div>
		<h6 class="collapse-header">Other Pages:</h6>
		<a class="collapse-item" href="404.html">404 Page</a>
		<a class="collapse-item" href="blank.html">Blank Page</a>
	</div>
</div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="charts.html">
		<i class="fas fa-fw fa-chart-area"></i>
		<span>Charts</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="tables.html">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

		<!-- Sidebar Message -->
		<div class="sidebar-card d-none d-lg-flex">
			<img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
			<p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
			<a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
		</div>

	</ul>
	<!-- End of Sidebar -->
<?php $this->stop() ?>