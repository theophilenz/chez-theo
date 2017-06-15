        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
    <!-- Footer -->
    <hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">
                    <?php if(get_theme_mod("copyright_setting")) : ?>
                    <?php echo get_theme_mod("copyright_setting"); ?>
                    <?php else : ?>
                        &copy;Copyright <?= Date('Y');?>, <?= bloginfo( 'title' ); ?>
                    <?php endif; ?>
                    </p>
                    <p class="copyright text-muted">Powered by <a href="http://wordpress.org">WordPress, </a>theme by <a href="http://theophile.me">Théophile Nzungize</a></p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>