<?php
/**
 * @var \App\View\AppView $this
 * 
 */
$roleid = $this->Identity->get('usertype');
if($roleid==0) $role='Admin';
if($roleid==1) $role='User';
$id = $this->Identity->get('id');
?>

<aside class="col-lg-2 col-md-3">
    <h4 class="heading"><?= __($role) ?></h4>

    <div class="side-nav">
        <?php  if($roleid==1){ ?>
            <?= $this->Html->link(__('Pofile Page'), ['controller'=>'users','action' => 'index', $id]) ?>
            <?= $this->Html->link(__('Change assword'), ['controller'=>'users','action' => 'changepassword', $id], ['class' => 'side-nav-item']) ?>
        <?php } ?>
        <?php  if($roleid==0){ ?>
        <?= $this->Html->link(__('User List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?php } ?>
    </div>
</aside>