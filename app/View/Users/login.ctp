<h3>Авторизація!</h3>
<?php echo $this->element('menu'); ?>
<div class="content">
	<?php 
		echo $this->Form->create('User');
		echo $this->Form->input('username', array('label' => 'Логін'));
		echo $this->Form->input('password', array('label' => 'Пароль'));
		echo $this->Form->end('Ввійти');
	?>
</div>