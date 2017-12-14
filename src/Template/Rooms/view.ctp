<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
    </table>

     
<div class="showtimes index large-9 medium-8 columns content">
    <h3><?= __('Showtimes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($showtimes as $showtime): ?>
            <tr>
                <td><?= $this->Number->format($showtime->id) ?></td>
                <td><?= $showtime->movie->name.' ' ?></td>
                <td><?= $showtime->room_id ?></td>
                <td><?= h($showtime->start) ?></td>
                <td><?= h($showtime->end) ?></td>
                <td><?= h($showtime->created) ?></td>
                <td><?= h($showtime->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $showtime->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $showtime->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $showtime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtime->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                
        
        
        
</div>

<div class="showtimes index large-9 medium-8 columns content">
    <h3><?= __('Planning Semaine 1') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Jour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($showtimes as $showtime): ?>
            <tr>
                <td><?= h($showtime->start) ?></td>
                <td><?=$showtime->has('movie') ? $this->Html->link($showtime->movie->name, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td>
                <td><?= h($showtime->start) ?></td>
                <td><?= h($showtime->end) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>      
</div>

<div class="days index large-9 medium-8 columns content">
    <h3><?= __('Planning semaine 2') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('lundi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mardi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mercredi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jeudi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendredi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('samedi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dimanche') ?></th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($items as $item): ?>
                <td><?$showtime->has('movie') ? $this->Html->link($showtime->movie->name, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td>
            <?php endforeach; ?>
            <?php foreach ($showtimes as $showtime): ?>
            
                <td><?=$showtime->has('movie') ? $this->Html->link($showtime->movie->name, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td>
                <td><?= h($showtime->start) ?></td>
                <td><?= h($showtime->end) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
