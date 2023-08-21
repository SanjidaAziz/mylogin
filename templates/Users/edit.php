<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="column-responsive column-80 content">
    <div class="users form">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Edit User') ?></legend>
            <?php
                echo $this->Form->control('firsname');
                echo $this->Form->control('lastname');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                echo $this->Form->control('phone');
                echo $this->Form->control('birthday');
                echo $this->Form->control('address');
                echo $this->Form->control('usertype');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

