<?php $this->layout('_theme', ['title' => $title]); ?>
<h3>Novos Menbros</h3>
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
</div>
