<h3>Перегляд статті</h3>
<?php echo $this->element('menu'); ?>
<div class="content">
<h1><?php echo h($post['Post']['title']) ?></h1>
<p><?php echo h($post['Post']['body']) ?></p>
<p>Дата створення: <?php echo $post['Post']['created'] ?></p>
</div>