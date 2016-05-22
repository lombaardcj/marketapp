<div class="panel panel-default">
    <div class="panel-heading"><h3 class="page-header">Users</h3></div>
    
    <div class="panel-body">
        <p>List of registered users</p>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <!--<th><?= $this->Paginator->sort('password') ?></th>-->
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <th scope="row"><?= $this->Number->format($user->id) ?></th>

                <td><?= h($user->email) ?></td>
                <!--<td><?= h($user->password) ?></td>-->
                <td><?= $this->Time->format($user->created, 'YYYY-m-dd, H:M') ?></td>
                <!--<td><?= h($user->created) ?></td>-->
                <td><?= h($user->modified) ?></td>
                <td>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-default']) ?>
                    <?= $this->Form->postLink( 'Delete', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>                
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
