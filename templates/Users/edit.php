<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="column-responsive column-80 content">
    <div class="users form">
        <?= $this->Form->create($user,['type'=>'get']) ?>
        <fieldset>
            <legend><?= __('Edit User') ?></legend>
            <?php
                echo $this->Form->control('password'); 
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

