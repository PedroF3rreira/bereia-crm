<?php $this->layout('_template', ['user_name' => $user_name, 'title' => $title]) ?>

<?php $this->start('page') ?>
<div class="col-xl-6 col-md-6 mb-4">
	<div class="text-center">
		<h1 class="h4 text-gray-900 mb-4">Cadastro de menbros</h1>
	</div>
	<?php if($flash): ?>
	<div class="bg-success bg-gradient mb-3 p-2 rounded text-white"><?= $flash ?></div>
	<?php endif; ?>
	<form class="user" action="<?= url().'/menbros/registrar' ?>" method="post" enctype="multipart/form-data">
		
		<div class="form-group d-flex">
			<input type="text" class="form-control form-control-user mr-2"
			id="exampleInputEmail" aria-describedby="emailHelp"
			placeholder="Nome completo" name="full_name" >
		</div>
		
		<div class="form-group d-flex">
			<input type="text" class="form-control form-control-user mr-2"
			 placeholder="cel: (88)98888-8888" name="cel" id="campoTelefone">
			 <input type="text" class="form-control form-control-user"
			 placeholder="cpf: 000.000.000-00" name="cpf" id="campoCpf">
		</div>
		
		<div class="form-group d-flex">
			<input type="email" class="form-control form-control-user mr-2"
			 placeholder="nome@outlook.com.com" name="email">
			 <input type="date" class="form-control form-control-user"
			 placeholder="00/00/0000" name="birthday" >
		</div>

		<label >Tipo de menbor: </label>
		<select class="form-select form-select-lg mb-3"name="type" >
			<option value="m" selected>Menbro</option>
			<option value="o">Obreiro</option>
			<option value="p">Pastor</option>
			<option value="b">presbítero</option>
			<option value="e">Evangelista</option>
		</select>

		<div class="form-group">
			<label for="exampleFormControlFile1">Foto do menbro</label>
			<input type="file" class="form-control-file" id="exampleFormControlFile1">
		</div>
		
		<button class="btn btn-primary btn-user btn-block">
			Cadastrar
		</button>

	</form>
</div>
<?php $this->stop() ?>