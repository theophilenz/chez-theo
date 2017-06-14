<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-infos">
                        Published under: <?php the_category( ' , '); ?><br>
                        <?php if(has_tag()): ?>
                        <?php the_tags(); ?>
                        <?php endif ?>
                    </div>
                    <hr>
                   <?= the_content() ?>
                </div>
            </div>
        </div>
    </article>
    <hr>
    <?php
        comments_template();
    ?>
