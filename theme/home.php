<?php $this->layout('_theme', ['title' => $title]); ?>
<div class="box-menbers">
	<?php if($menbers): ?>
		<?php foreach ($menbers as $menber): ?>
				<div class="menber">
					
					<div class="menber-image">
						<img src="<?=url().'/theme/assets/img/user1.jpg' ?>" alt="">
					</div>
					
					<div class="menber-name"><?=$menber->name;?></div>
					<div class="link-plus"><a href="#">Ver mais<span class="material-symbols-sharp">
arrow_circle_right
</span></a></div>
				</div>
		<?php endforeach ?>
	<?php else: ?>
	<?php endif; ?>
</div>
