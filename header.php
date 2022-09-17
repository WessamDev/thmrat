<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php wp_title('|', 'true', 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>

<body class="<?php body_class();?>">

    <!-- strat header page -->
    <header class="header">
        <!-- strat Container  Div -->
        <div class="container">

            <!-- Start Logo Section -->
            <h1 class="logo"><a href="<?php home_url()?>"><?php bloginfo('name'); ?></a></h1>
            <!-- End Logo Section -->

            <!-- Start navbar Section -->
            <nav class="mynav">
                <!-- My menu-bars -->
                <i class="fa-solid fa-bars links-bar" data-toggle="#mynavbar"></i>

                <?php thmrat_call_navbar_links(); // Calling The Header Navbar?>
               
            </nav><!-- End Navbar-->
        </div><!-- End Container -->
    </header><!-- End header page -->
    