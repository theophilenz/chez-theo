    <div class="ctcomment-section">
        <div class="ctcomments">
            <?php if(have_comments() ): ?>
                <h3>Recent comments</h3>
                <p>
                    <?php
                        $comments_options= ['reply_text'=> '<strong>Reply</strong>'];
                        wp_list_comments($comments_options);
                    ?>
                </p>
                
            <?php endif; ?>
        </div>
        <div class="ctcomments-form">
            <?php
                comment_form();
            ?>
        </div>
    </div>