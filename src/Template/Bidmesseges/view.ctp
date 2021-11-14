<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bidmessege $bidmessege
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bidmessege'), ['action' => 'edit', $bidmessege->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bidmessege'), ['action' => 'delete', $bidmessege->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidmessege->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bidmesseges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bidmessege'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidmesseges view large-9 medium-8 columns content">
    <h3><?= h($bidmessege->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bidmessege->has('user') ? $this->Html->link($bidmessege->user->id, ['controller' => 'Users', 'action' => 'view', $bidmessege->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidmessege->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bidinfo Id') ?></th>
            <td><?= $this->Number->format($bidmessege->bidinfo_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidmessege->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Messege') ?></h4>
        <?= $this->Text->autoParagraph(h($bidmessege->messege)); ?>
    </div>
</div>
