<h2>User</h2>

<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <td>Id</td>
        <td><?php echo h($user->id); ?></td>
    </tr>
    <tr>
        <td>Role</td>
        <td><?php echo h($user->role); ?></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo h($user->first_name); ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo h($user->last_name); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo h($user->email); ?></td>
    </tr>
    <tr>
        <td>Active</td>
        <td><?php echo $this->Html->link($this->Html->image('icon_' . $user->active . '.png'), array('controller' => 'users', 'action' => 'toggle', 'active', $user->id), array('class' => 'toggle', 'escape' => false)); ?></td>
    </tr>
    <tr>
        <td>Login Count</td>
        <td><?php echo h($user->login_count); ?></td>
    </tr>
    <tr>
        <td>Login Last</td>
        <td><?php echo h($user->login_last); ?></td>
    </tr>
    <tr>
        <td>Created</td>
        <td><?php echo h($user->created); ?></td>
    </tr>
    <tr>
        <td>Modified</td>
        <td><?php echo h($user->modified); ?></td>
    </tr>
</table>

<br />
<br />



<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Html->link('Edit User', ['action' => 'edit', $user->id], ['class' => 'btn btn-default']); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete User', ['action' => 'delete', $user->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]); ?>

<br />
<br />


