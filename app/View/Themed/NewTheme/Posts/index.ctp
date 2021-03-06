<h3>Статті (нова тема):</h3>

<div class="actions">
    <ul>
        <li><a href="./">Головна</a></li>
        <li><?php echo $this->Html->link('Добавити статтю', '/posts/add'); ?></li>
        <li><?php echo $this->Html->link('Список категорій', array('controller' => 'categories', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Нова категорія', array('controller' => 'categories', 'action' => 'add')); ?></li>
    </ul>
</div>

<div class="content">
<?php if (is_array($posts)) : ?>
<table>
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Вміст</th>
        <th>Дата створення</th>
        <th>Дата редагування</th>
        <th>Дії</th>
    </tr>
<?php foreach($posts as $post) : ?>
    <tr>
        <th><?php echo h($post['Post']['id']) ?></th>
        <th><?php echo $this->Html->link( h($post['Post']['title']), array('action' => 'view', $post['Post']['id']))?></th>
        <th><?php echo h($post['Post']['body']) ?></th>
        <th><?php echo h($post['Post']['created']) ?></th>
        <th><?php echo h($post['Post']['modified']) ?></th>
        <th><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $post['Post']['id']))?> <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Підтвердіть видалення')) ?></th>
    </tr>
<?php endforeach; ?>
</table>
<?php else : ?>
<?php echo $posts; ?>
<?php endif; ?>
</div>