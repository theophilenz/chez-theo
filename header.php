<!DOCTYPE html>
<html <?= language_attributes(); ?> class="no-js">
    <head>
        <title>
        <?php
            if(is_home()){
                echo bloginfo('title') . "- " . get_bloginfo( 'description');
            }else{
                echo bloginfo('title') . "- " . get_the_title();
            }
            
        ?>
        </title>
        <meta charset="<?= bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?= wp_head(); ?>
    </head>
    <body  <?= body_class(); ?>>
        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= get_home_url() ?>"><?= bloginfo('title') ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?= wp_nav_menu([
                    "theme_location"=>"header-menu",
                    "menu_class"=>"nav navbar-nav navbar-right"
                ]); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>
                            <?php
                            if (is_home()) {
                                bloginfo('title');
                            }if (is_single() || is_page()) {
                                the_title();
                            } elseif (is_404()) {
                                echo 'Whoops';
                            } elseif(is_archive()){
                                echo the_archive_title();
                            }
                            ?>
                        </h1>
                        <hr class="small">
                        
                        <span class="subheading">
                            <?php
                            if (is_single()) {
                                global $post;
                                $author_name=ct_get_author_infos('name');
                                $author_nickname=ct_get_author_infos('nickname');
                                echo 'By <a href="/author/'. $author_nickname .'">'.$author_name.'</a>';
                            } elseif(is_404()){
                                echo "We couldn't find this page :(";
                            }else {
                                bloginfo('description');
                            }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
     <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
