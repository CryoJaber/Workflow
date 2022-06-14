<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamber $chamber
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chamber->chamber_id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamber->chamber_id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Chambers'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="chambers form content">
    <?= $this->Form->create($chamber) ?>
    <fieldset>
        <legend><?= __('Edit Chamber') ?></legend>
        <?php
            echo $this->Form->control('chamber_name');
            echo $this->Form->control('business_name');
            echo $this->Form->control('chamber_type');
            echo $this->Form->control('chamber_location');
            echo $this->Form->control('chamber_city');
            echo $this->Form->control('chamber_state');
            echo $this->Form->control('chamber_zipcode');
            echo $this->Form->control('chamber_country');
            echo $this->Form->control('netbiter_user');
            echo $this->Form->control('netbiter_pwd');
            echo $this->Form->control('root_pwd');
            echo $this->Form->control('odroid_pwd');
            echo $this->Form->control('dglux_user');
            echo $this->Form->control('dglux_pwd');
            echo $this->Form->control('plc_Pwd');
            echo $this->Form->control('cryoqueue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
