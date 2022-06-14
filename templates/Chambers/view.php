<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamber $chamber
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Chamber'), ['action' => 'edit', $chamber->chamber_id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Chamber'), ['action' => 'delete', $chamber->chamber_id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamber->chamber_id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Chambers'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Chamber'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="chambers view large-9 medium-8 columns content">
    <h3><?= h($chamber->chamber_id) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Chamber Name') ?></th>
                <td><?= h($chamber->chamber_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Business Name') ?></th>
                <td><?= h($chamber->business_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber Type') ?></th>
                <td><?= h($chamber->chamber_type) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber Location') ?></th>
                <td><?= h($chamber->chamber_location) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber City') ?></th>
                <td><?= h($chamber->chamber_city) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber State') ?></th>
                <td><?= h($chamber->chamber_state) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber Zipcode') ?></th>
                <td><?= h($chamber->chamber_zipcode) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber Country') ?></th>
                <td><?= h($chamber->chamber_country) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Netbiter User') ?></th>
                <td><?= h($chamber->netbiter_user) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Netbiter Pwd') ?></th>
                <td><?= h($chamber->netbiter_pwd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Root Pwd') ?></th>
                <td><?= h($chamber->root_pwd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Odroid Pwd') ?></th>
                <td><?= h($chamber->odroid_pwd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Dglux User') ?></th>
                <td><?= h($chamber->dglux_user) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Dglux Pwd') ?></th>
                <td><?= h($chamber->dglux_pwd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Plc Pwd') ?></th>
                <td><?= h($chamber->plc_Pwd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Cryoqueue') ?></th>
                <td><?= h($chamber->cryoqueue) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chamber Id') ?></th>
                <td><?= $this->Number->format($chamber->chamber_id) ?></td>
            </tr>
        </table>
    </div>
</div>
