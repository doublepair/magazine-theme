<!DOCTYPE html>
<html 
    <?php language_attributes();?>
>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php bloginfo( "description" ); ?>">

<?php wp_head(); ?>

</head>


<body <?php body_class();?>>

    <div class="container clearfix"> 

        <header class="header clearfix">

            <a href="" class="header-logo">Logo</a>
            <a href="#" class="header-icon-burger"><span></span><span></span><span></span></a>

            <?php /*Main Navigation*/
                wp_nav_menu( array(
                    "theme_location" => "header",
                    "depth" => 2,
                    "container" => false,
                    "menu_class" => "header-menu"
                    )
                )
            ?>

            
        </header>

        <?php if(is_front_page()){ ?>
            <h1 class="h1-title">
            <?php 
                bloginfo("name");
            ?>
            -
            <?php
                bloginfo("description");
            ?>
        </h1>
        <?php } ?>

        