<?php
/**
 * @var \App\View\AppView $this
 *
 */
use Cake\ORM\TableRegistry;

// Get the User model
$usersTable = TableRegistry::getTableLocator()->get('Users');

// Fetch the user by ID
$user = $usersTable->get($id);
//echo 'User ID: ' . $user->id;
//echo 'User Name: ' . $user->firsname;
 
?>

    <div class="column-responsive column-80 content">
        <div class="users view ">
            <div class="d-flex justify-content-center"><h3><?= h('User Profile') ?></h3></div>
            <table>
                <tr>
                    <th><?= __('Firsname') ?></th>
                    <td><?= h($user->firsname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($user->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($user->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= h($user->birthday) ?></td>
                </tr>
                
            </table>
        </div>
    </div>

