<!DOCTYPE html>
<html <?= language_attributes(); ?> class="no-js">
    <head>
        <title></title>
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
                        <h1><?= bloginfo('title') ?></h1>
                        <hr class="small">
                        <span class="subheading"><?= bloginfo('description') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>