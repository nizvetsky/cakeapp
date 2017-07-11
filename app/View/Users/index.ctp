<h3>Список користувачів:</h3>

<?php echo $this->element('menu'); ?>

<div class="content">
<table>
    <tr>
        <th>ID</th>
        <th>Логін</th>
        <th>Пароль</th>
        <th>Роль</th>
    </tr>
<?php foreach($users as $user) : ?>
    <tr>
        <th><?php echo h($user['User']['id']) ?></th>
        <th><?php echo h($user['User']['username']) ?></th>
        <th><?php echo h($user['User']['password']) ?></th>
        <th><?php echo h($user['User']['role']) ?></th>
    </tr>
<?php endforeach; ?>
</table>
</div>