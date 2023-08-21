<?php
/**
 * @var \App\View\AppView $this
 * 
 */
$roleid = $this->Identity->get('usertype');
?>

<aside class="col-lg-2 col-md-3">
    <h4 class="heading"><?= __($viewname) ?></h4>

    <div class="side-nav">
        <?php  if($roleid==1){ ?>
            <?= $this->Html->link(__('Profile page'), ['controller'=>'users','action' => 'view'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Change password'), ['controller'=>'users','action' => 'edit'], ['class' => 'side-nav-item']) ?>
        <?php } ?>
        <?php  if($roleid==0){ ?>
        <?= $this->Html->link(__('User List'), ['controller'=>'users','action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?php } ?>
    </div>
</aside>