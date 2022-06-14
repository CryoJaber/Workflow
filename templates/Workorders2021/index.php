<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workorders2021[]|\Cake\Collection\CollectionInterface $workorders2021
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Workorders2021'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('work_order_timestamp') ?></th>
        <th scope="col"><?= $this->Paginator->sort('unit_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('san_po_num') ?></th>
        <th scope="col"><?= $this->Paginator->sort('office_po_num') ?></th>
        <th scope="col"><?= $this->Paginator->sort('work_order_num') ?></th>
        <th scope="col"><?= $this->Paginator->sort('description') ?></th>
        <th scope="col"><?= $this->Paginator->sort('staff_support_contact') ?></th>
        <th scope="col"><?= $this->Paginator->sort('date_requested') ?></th>
        <th scope="col"><?= $this->Paginator->sort('time_reqested') ?></th>
        <th scope="col"><?= $this->Paginator->sort('not_to_exceed') ?></th>
        <th scope="col"><?= $this->Paginator->sort('warranty_coverage') ?></th>
        <th scope="col"><?= $this->Paginator->sort('invoiced') ?></th>
        <th scope="col"><?= $this->Paginator->sort('closed_by') ?></th>
        <th scope="col"><?= $this->Paginator->sort('completed_on') ?></th>
        <th scope="col"><?= $this->Paginator->sort('work_summary') ?></th>
        <th scope="col"><?= $this->Paginator->sort('estimated_service_duration') ?></th>
        <th scope="col"><?= $this->Paginator->sort('freshdesk_ticket_num') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($workorders2021 as $workorders2021) : ?>
        <tr>
            <td><?= $this->Number->format($workorders2021->id) ?></td>
            <td><?= h($workorders2021->work_order_timestamp) ?></td>
            <td><?= h($workorders2021->unit_name) ?></td>
            <td><?= h($workorders2021->san_po_num) ?></td>
            <td><?= h($workorders2021->office_po_num) ?></td>
            <td><?= h($workorders2021->work_order_num) ?></td>
            <td><?= h($workorders2021->description) ?></td>
            <td><?= h($workorders2021->staff_support_contact) ?></td>
            <td><?= h($workorders2021->date_requested) ?></td>
            <td><?= h($workorders2021->time_reqested) ?></td>
            <td><?= h($workorders2021->not_to_exceed) ?></td>
            <td><?= h($workorders2021->warranty_coverage) ?></td>
            <td><?= h($workorders2021->invoiced) ?></td>
            <td><?= h($workorders2021->closed_by) ?></td>
            <td><?= h($workorders2021->completed_on) ?></td>
            <td><?= h($workorders2021->work_summary) ?></td>
            <td><?= h($workorders2021->estimated_service_duration) ?></td>
            <td><?= h($workorders2021->freshdesk_ticket_num) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $workorders2021->id], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workorders2021->id], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workorders2021->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workorders2021->id), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
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
