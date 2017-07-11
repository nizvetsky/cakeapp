<h1>Редагування категорії <?php echo $this->request->data['Category']['title'] ?></h1>
<?php echo $this->element('menu'); ?>
<div class="content">
	<?php 
		echo $this->Form->create('Category');
		echo $this->Form->input('title', array('label' => 'Назва'));
		echo $this->Form->end('Змінити');
	?>
</div>