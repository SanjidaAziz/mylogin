<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 *
 * 
 */
use Cake\Chronos\Chronos;
?>
<div class="column-responsive column-80 content">
         
    <div class="users index ">
        <div class="row py-4">
            <div class="col-8">           
                <h3><?= __('User List') ?></h3>
            </div>
            <div class="col-4">
                <?= $this->Form->create(null, ['type' => 'get']) ?>
                <div class="input-group">
                    <?= $this->Form->text('key', [
                        'label' => false,
                        'placeholder' => 'Search here', // Placeholder text
                        'class' => 'form-control', // Add your CSS classes for styling
                    ]) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>

        </div>
                   
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('name') ?></th>
                        <th><?= $this->Paginator->sort('age') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('phone') ?></th>                   
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <?php 
                    $name= $user->firsname.' '.$user->lastname;
                
                    // Calculate the age
                    $now = Chronos::now(); // Current date and time
                    $birthdate = new Chronos( $user->birthday);
                    $age = $birthdate->diffInYears($now);

                    ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($name) ?></td>
                        <td><?= h($age) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>                               
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
       
</div