<hr>
<div class="post-preview">
        <h2 class="post-title">
            <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
        </h2>
        <p class="post-excerpt">
            <?= the_excerpt() ?>
        </p>
    <p class="post-meta">By <a href="author/<?=the_author_meta('login') ?>"><?= the_author_firstname() ?></a> on <?= the_date() ?></p>
</div>