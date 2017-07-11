<h3>Добавлення статті!</h3>
<?php echo $this->element('menu'); ?>
<div class="content">
	<?php 
		echo $this->Form->create('User');
		echo $this->Form->input('username', array('label' => 'Введіть логін'));
		echo $this->Form->input('password', array('label' => 'Пароль'));
		echo $this->Form->input('role', array(
			'label' => 'Роль',
			'options' => array('user' => 'Користувач', 'admin' => 'Адміністратор')
			));
		echo $this->Form->end('Зареєструвати');
	?>
</div>