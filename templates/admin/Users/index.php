<script>

$(document).ready(function() {

    $('.first_name').editable({
        type: 'text',
        name: 'first_name',
        url: '/admin/users/editable',
        title: 'First Name',
        placement: 'right',
    });

    $('.last_name').editable({
        type: 'text',
        name: 'last_name',
        url: '/admin/users/editable',
        title: 'Last Name',
        placement: 'right',
    });

    $('.domain').editable({
        type: 'text',
        name: 'domain',
        url: '/admin/users/editable',
        title: 'domain',
        placement: 'right',
    });

    $('.first_name').editable({
        type: 'text',
        name: 'first_name',
        url: '/admin/users/editable',
        title: 'First Name',
        placement: 'right',
    });

    $('.last_name').editable({
        type: 'text',
        name: 'last_name',
        url: '/admin/users/editable',
        title: 'Last Name',
        placement: 'right',
    });

    $('.email1').editable({
        type: 'text',
        name: 'email',
        url: '/admin/users/editable',
        title: 'Email',
        placement: 'right',
    });

    $('.phone').editable({
        type: 'text',
        name: 'phone',
        url: '/admin/users/editable',
        title: 'Phone',
        placement: 'right',
    });

    $('.notes').editable({
        type: 'textarea',
        name: 'notes',
        url: '/admin/users/editable',
        title: 'Notes',
        placement: 'left',
    });

});

</script>

<h2>Users</h2>

<?php echo $this->element('pagination'); ?>

<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <th><?php echo $this->Paginator->sort('id');?></th>
        <th><?php echo $this->Paginator->sort('role');?></th>
        <th><?php echo $this->Paginator->sort('first_name');?> <?php echo $this->Paginator->sort('last_name');?> / <?php echo $this->Paginator->sort('email');?> / <?php echo $this->Paginator->sort('phone');?></th>
        <th><?php echo $this->Paginator->sort('active');?></th>
        <th><?php echo $this->Paginator->sort('last_login');?> / <?php echo $this->Paginator->sort('logins');?></th>
        <th><?php echo $this->Paginator->sort('created');?> / <?php echo $this->Paginator->sort('modified');?></th>
        <th class="actions">Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo h($user->id); ?></td>
        <td><?php echo h($user->role); ?></td>
        <td>
            <span class="first_name" data-value="<?php echo $user->first_name; ?>" data-pk="<?php echo $user->id; ?>"><?php echo $user->first_name; ?></span>
            <span class="last_name" data-value="<?php echo $user->last_name; ?>" data-pk="<?php echo $user->id; ?>"><?php echo $user->last_name; ?></span>
            <br />
            <span class="email1" data-value="<?php echo $user->email; ?>" data-pk="<?php echo $user->id; ?>"><?php echo $user->email; ?></span>
            <br />
            <span class="phone" data-value="<?php echo $user->phone; ?>" data-pk="<?php echo $user->id; ?>"><?php echo $user->phone; ?></span>
        </td>
        <td><?php echo $this->Html->link($this->Html->image('icon_' . $user->active . '.png'), array('controller' => 'users', 'action' => 'toggle', 'active', $user->id), array('class' => 'toggle', 'escape' => false)); ?></td>
        <td>
            <?php echo h($user->login_last); ?>
            <br />
            <?php echo h($user->login_count); ?>
        </td>
        <td>
            <?php echo h($user->created); ?>
            <br />
            <?php echo h($user->modified); ?>
        </td>
        <td class="actions">
            <?php echo $this->Html->link('View', array('action' => 'view', $user->id), array('class' => 'btn btn-default btn-xs')); ?>
            <?php echo $this->Html->link('Change Password', array('action' => 'password', $user->id), array('class' => 'btn btn-default btn-xs')); ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user->id), array('class' => 'btn btn-default btn-xs')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<br />

<?php echo $this->element('pagination'); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('New User', array('action' => 'add'), array('class' => 'btn btn-default')); ?>

<br />
<br />

