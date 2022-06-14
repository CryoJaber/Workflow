<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workorders2021 $workorders2021
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Workorders2021'), ['action' => 'edit', $workorders2021->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Workorders2021'), ['action' => 'delete', $workorders2021->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workorders2021->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Workorders2021'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Workorders2021'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="workorders2021 view large-9 medium-8 columns content">
    <h3><?= h($workorders2021->id) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Work Order Timestamp') ?></th>
                <td><?= h($workorders2021->work_order_timestamp) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Unit Name') ?></th>
                <td><?= h($workorders2021->unit_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('San Po Num') ?></th>
                <td><?= h($workorders2021->san_po_num) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Office Po Num') ?></th>
                <td><?= h($workorders2021->office_po_num) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Work Order Num') ?></th>
                <td><?= h($workorders2021->work_order_num) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Description') ?></th>
                <td><?= h($workorders2021->description) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Staff Support Contact') ?></th>
                <td><?= h($workorders2021->staff_support_contact) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Date Requested') ?></th>
                <td><?= h($workorders2021->date_requested) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Time Reqested') ?></th>
                <td><?= h($workorders2021->time_reqested) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Not To Exceed') ?></th>
                <td><?= h($workorders2021->not_to_exceed) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Warranty Coverage') ?></th>
                <td><?= h($workorders2021->warranty_coverage) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Invoiced') ?></th>
                <td><?= h($workorders2021->invoiced) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Closed By') ?></th>
                <td><?= h($workorders2021->closed_by) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Completed On') ?></th>
                <td><?= h($workorders2021->completed_on) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Work Summary') ?></th>
                <td><?= h($workorders2021->work_summary) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Estimated Service Duration') ?></th>
                <td><?= h($workorders2021->estimated_service_duration) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Freshdesk Ticket Num') ?></th>
                <td><?= h($workorders2021->freshdesk_ticket_num) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($workorders2021->id) ?></td>
            </tr>
        </table>
    </div>
</div>
