<?php
if(!isset($categoryslug)) {
    $categoryslug = null;
}
?>

<div class="list-group">
    <button type="button" class="list-group-item active wt"><?php echo $this->Html->link('Categories', ['controller' => 'categories', 'action' => 'index', '_full' => true]); ?></button>
    <?php foreach ($categories as $category): ?>
        <?php $bg = ($category->slug != $categoryslug) ? 'bggrey' : ''; ?>
        <?php echo $this->Html->link($category->name, ['controller' => 'categories', 'action' => 'view', $category->slug, '_full' => true], ['class' => 'list-group-item ' . $bg]); ?>

    <?php endforeach; ?>
</div>