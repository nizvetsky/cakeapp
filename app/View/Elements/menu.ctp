<div class="actions">
	<?php if($logged_user): ?>
        <p>Добррого дня, <?php echo $logged_user['username'] ?></p>
        <p><?php echo $this->Html->link('Вихід', '/users/logout') ?></p>
    <?php else: ?>
        <p><?php echo $this->Html->link('Вхiд', '/users/login') ?></p>
    <?php endif; ?>
    <ul>
        <li><?php echo $this->Html->link('Головна', array('controller' => 'posts', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Добавити статтю', array('controller' => 'posts', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Список категорій', array('controller' => 'categories', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Нова категорія', array('controller' => 'categories', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Список користувачів', array('controller' => 'users', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Реєстрація', array('controller' => 'users', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Написати в підтримку', array('controller' => 'posts', 'action' => 'send')); ?></li>
    </ul>
</div>