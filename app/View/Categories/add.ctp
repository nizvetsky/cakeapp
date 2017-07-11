<h3>Добавлення Категорії!</h3>
<?php echo $this->element('menu'); ?>
<div class="content">
	<?php 
		echo $this->Form->create('Category');
		echo $this->Form->input('title', array('label' => 'Назва'));
		echo $this->Form->end('Сохранити');
	?>
</div>