<h3>Надсилання в підтримку:</h3>

<?php echo $this->element('menu'); ?>

<div class="content">
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input('name', array('label' => 'Назва'));
    echo $this->Form->input('text', array('label' => 'Текст'));
    echo $this->Form->end('Відправити');
?>
</div>