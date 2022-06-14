<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamber[]|\Cake\Collection\CollectionInterface $chambers
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Chamber'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('chamber_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('business_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_type') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_location') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_city') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_state') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_zipcode') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chamber_country') ?></th>
        <th scope="col"><?= $this->Paginator->sort('netbiter_user') ?></th>
        <th scope="col"><?= $this->Paginator->sort('netbiter_pwd') ?></th>
        <th scope="col"><?= $this->Paginator->sort('root_pwd') ?></th>
        <th scope="col"><?= $this->Paginator->sort('odroid_pwd') ?></th>
        <th scope="col"><?= $this->Paginator->sort('dglux_user') ?></th>
        <th scope="col"><?= $this->Paginator->sort('dglux_pwd') ?></th>
        <th scope="col"><?= $this->Paginator->sort('plc_Pwd') ?></th>
        <th scope="col"><?= $this->Paginator->sort('cryoqueue') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($chambers as $chamber) : ?>
        <tr>
            <td><?= $this->Number->format($chamber->chamber_id) ?></td>
            <td><?= h($chamber->chamber_name) ?></td>
            <td><?= h($chamber->business_name) ?></td>
            <td><?= h($chamber->chamber_type) ?></td>
            <td><?= h($chamber->chamber_location) ?></td>
            <td><?= h($chamber->chamber_city) ?></td>
            <td><?= h($chamber->chamber_state) ?></td>
            <td><?= h($chamber->chamber_zipcode) ?></td>
            <td><?= h($chamber->chamber_country) ?></td>
            <td><?= h($chamber->netbiter_user) ?></td>
            <td><?= h($chamber->netbiter_pwd) ?></td>
            <td><?= h($chamber->root_pwd) ?></td>
            <td><?= h($chamber->odroid_pwd) ?></td>
            <td><?= h($chamber->dglux_user) ?></td>
            <td><?= h($chamber->dglux_pwd) ?></td>
            <td><?= h($chamber->plc_Pwd) ?></td>
            <td><?= h($chamber->cryoqueue) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $chamber->chamber_id], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chamber->chamber_id], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chamber->chamber_id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamber->chamber_id), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('«', ['label' => __('First')]) ?>
        <?= $this->Paginator->prev('‹', ['label' => __('Previous')]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('›', ['label' => __('Next')]) ?>
        <?= $this->Paginator->last('»', ['label' => __('Last')]) ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
