<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bidmessege $bidmessege
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bidmesseges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidmesseges form large-9 medium-8 columns content">
    <?= $this->Form->create($bidmessege) ?>
    <fieldset>
        <legend><?= __('Add Bidmessege') ?></legend>
        <?php
            echo $this->Form->control('bidinfo_id');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('messege');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
