<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p></p>
                   <?= the_content() ?>
                </div>
            </div>
        </div>
    </article>
    <hr>
    <?php
        comments_template();
    ?>
