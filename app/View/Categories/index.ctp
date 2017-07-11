<h3>Категорії:</h3>
<?php echo $this->element('menu'); ?>

<div class="content">
<table>
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Дата створення</th>
        <th>Дата редагування</th>
        <th>Дії</th>
    </tr>
<?php foreach($categories as $category) : ?>
    <tr>
        <th><?php echo h($category['Category']['id']) ?></th>
        <th><?php echo $this->Html->link( h($category['Category']['title']), array('action' => 'view', $category['Category']['id']))?></th>
        <th><?php echo h($category['Category']['created']) ?></th>
        <th><?php echo h($category['Category']['modified']) ?></th>
        <th><?php echo $this->Html->link( 'Edit', array('action' => 'edit', $category['Category']['id']))?> <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $category['Category']['id']), array('confirm' => 'Підтвердіть видалення')) ?></th>
    </tr>
<?php endforeach; ?>
</table>
</div>