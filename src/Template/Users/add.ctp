<div class="container-fluid">
	
	<div class="row">
		<div class="users form">
		<?= $this->Form->create($user) ?>
			<fieldset>
				<legend><?= __('New User') ?></legend>
				<?= $this->Form->input('username') ?>
				<?= $this->Form->input('password') ?>
		   </fieldset>
		<?= $this->Form->button(__('Submit')); ?>
		<?= $this->Form->end() ?>
		</div>
	</div>