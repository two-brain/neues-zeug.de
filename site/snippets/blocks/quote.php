<?php if ($block->role() == 'composer') : ?>
<div class="kommentar-beschreibung">
<?php else : ?>
<div class="komposition-kommentare"><div class="komposition-kommentar">
<?php endif ?>

<blockquote class="blockquote">
    <?= $block->text()->kt() ?>
    <?php if ($block->citation()->isNotEmpty()): ?>
    <footer class="blockquote-footer cite-<?php e($block->role() == 'composer', 'left', 'right') ?> large"><?= $block->citation() ?></footer>
    <?php endif ?>
</blockquote>

<?php if ($block->role() == 'composer') : ?>
</div>
<?php else : ?>
</div></div>
<?php endif ?>
