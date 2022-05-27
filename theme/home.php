<?php $this->layout('index', ['title' => $title]); ?>
<!--<h3>Novos Menbros</h3>
<div class="box-menbers">
	<?php if($menbers): ?>
		<?php foreach ($menbers as $menber): ?>
			<div class="menber">

				<div class="menber-image">
					<?php if($menber->img_url == null): ?>
						<img src="<?=url().'/theme/assets/img/user-default.png';?>" alt="user_image">
					<?php else: ?>
						<img src="<?=$menber->img_url;?>" alt="user_image">
					<?php endif; ?>
				</div>

				<div class="menber-name"><?=$menber->first_name;?></div>
				<div class="link-plus">
					<a href="#">
						Ver mais<span class="material-symbols-sharp">arrow_circle_right</span>
					</a>
				</div>
			</div>
		<?php endforeach ?>
	<?php else: ?>
		<h3>Não a menbros cadastrados!</h3>
	<?php endif; ?>
</div>-->
<!-- Content Row -->
<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						Menbros cadastrados</div>
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
						<div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
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
