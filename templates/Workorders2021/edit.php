<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workorders2021 $workorders2021
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workorders2021->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workorders2021->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Workorders2021'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="workorders2021 form content">
    <?= $this->Form->create($workorders2021) ?>
    <fieldset>
        <legend><?= __('Edit Workorders2021') ?></legend>
        <?php
            echo $this->Form->control('work_order_timestamp');
            echo $this->Form->control('unit_name');
            echo $this->Form->control('san_po_num');
            echo $this->Form->control('office_po_num');
            echo $this->Form->control('work_order_num');
            echo $this->Form->control('description');
            echo $this->Form->control('staff_support_contact');
            echo $this->Form->control('date_requested');
            echo $this->Form->control('time_reqested');
            echo $this->Form->control('not_to_exceed');
            echo $this->Form->control('warranty_coverage');
            echo $this->Form->control('invoiced');
            echo $this->Form->control('closed_by');
            echo $this->Form->control('completed_on');
            echo $this->Form->control('work_summary');
            echo $this->Form->control('estimated_service_duration');
            echo $this->Form->control('freshdesk_ticket_num');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
