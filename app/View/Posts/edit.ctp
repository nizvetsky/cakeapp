<h1>Редагування статті <?php echo $this->request->data['Post']['title'] ?></h1>
<?php echo $this->element('menu'); ?>
<div class="content">
	<?php 
		echo $this->Form->create('Post');
		echo $this->Form->input('category_id', array('label' => 'Виберіть категорію'));
		echo $this->Form->input('title', array('label' => 'Назва'));
		echo $this->Form->input('body', array('label' => 'Текст'));
		//echo $this->Form->hidden('id');
		echo $this->Form->end('Змінити');
	?>
</div>