<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>


        <div class="container">
            <div class="row" id="menu_style">
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-6 col-12">
                    <div class="logo">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-removebg-preview.png'; ?>" alt="logo"></a>
                    </div>
                </div>
        
                <div class="col-xl-9 col-lg-9 col-md-6 col-xs-6 col-12 menu__list">
                    <nav id="main-menu">
                        <?php
                        wp_nav_menu(array(
                        'theme_location' => 'main',
                        'container' => 'ul'
                        ));
                    ?>
                    </nav>
                    <div class="social-icons">
                        <a href="https://github.com/platypuswithoutk"><i class="fab fa-github-square github"></i></a>
                        <a href="https://www.linkedin.com/in/roksana-dzioba-268a33156/"><i class="fab fa-linkedin linkedin"></i></a>
                    </div>
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>