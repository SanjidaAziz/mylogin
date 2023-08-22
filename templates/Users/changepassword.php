<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="column-responsive column-80 content">
    <div class="users form">
        <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'changepassword', $user->id]]) ?>
        <fieldset>
            <legend><?= __('Change Password') ?></legend>
            <?php
                echo $this->Form->control('current_password', [
                    'type' => 'password',
                    'label' => 'Current Password',
                    'required' => true,
                ]);

                echo $this->Form->control('new_password', [
                    'type' => 'password',
                    'label' => 'New Password',
                    'required' => true,
                ]);

                echo $this->Form->control('confirm_password', [
                    'type' => 'password',
                    'label' => 'Confirm New Password',
                    'required' => true,
                ]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Change')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>

