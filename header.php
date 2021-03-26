<!DOCTYPE html>
<html 
    <?php language_attributes();?>
>


<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Roboto Regular -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Main.css -->
    <link href="/style.css" rel="stylesheet">
    <title>Magazine Title</title>
</head>

<?php wp_head(); ?>

</head>


<body <?php body_class();?>>

    <div class="container clearfix"> 

        <!-- Header -->
    <header class="header clearfix">
        <div class="pos-f-t">
            <!-- Nav Menu -->
            <div class="collapse navbar-menu" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <div class="navbar-close-button">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">                
                            <div class="outer">
                                <div class="inner">
                                    <label>Close</label>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="container">
                        <div class="col row navbar-menu-search">
                            <div class="col">
                                <form class="d-flex">
                                    <input class="form-control me-2 navbar-menu-search-form" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">SEARCH</button>
                                </form>
                            </div>
                        </div>
                        <a href="#" class="col navbar-menu-title">Menu</a>
                    </div>
                    <br> <!--TEST-->
                    <span class="text-muted">Some info below</span>
                    <br> <!--TEST-->
                    <div class="row">
                        <div class="col">
                        <?php /*Main Navigation*/
                            wp_nav_menu( array(
                                "theme_location" => "header",
                                "depth" => 2,
                                "container" => false,
                                "menu_class" => "header-menu"
                                )
                            )
                        ?>
                        </div>
                        <div class="col">
                            <a class="menu-category" href="#">Categories Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                        </div>
                        <div class="col">
                            <a class="menu-category" href="#">Categories Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                        </div>
                        <div class="col">
                            <a class="menu-category" href="#">Categories Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                            <a class="menu-category-item">Test</a>
                        </div>
                    </div>
                    <div class="row navbar-menu-social">
                        <a href="#" class="fa fa-facebook navbar-menu-facebook"></a></a>
                        <a href="#" class="fa fa-youtube navbar-menu-youtube"></a></a>
                        <a href="#" class="fa fa-instagram navbar-menu-instagram"></a></a>
                        <a href="#" class="fa fa-reddit navbar-menu-reddit"></a></a>
                        <a href="#" class="fa fa-twitter navbar-menu-twitter"></a></a>
                    </div>

                </div>
            </div>
            <!-- Navbar -->
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-logo" href="#">
                    <h1>Logo</h1>
                </a>
                <a href="https://github.com/doublepair" target="_blank"><small class="text-muted navbar-credits">Created By Yaros M.</small></a>
                <!-- Language Picker -->
                <div class="navbar-language">
                    <select name="navbar-language-select" class="navbar-language-select" id="navbar-language-select">
                        <option lang="en" value="english" selected>🇬🇧</option>
                        <option lang="it" value="italiano">🇮🇹</option>
                    </select>
                </div>
            </nav>
        </div>
        <!-- 2nd NavBar (only desktop)-->
        <ul class="nav nav-tabs desktop-navbar bg-dark">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </header>

            

            
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
        <?php } else if (is_category()) { ?>
            <h1 class="category-title"> <?php esc_html_e("Articoli in categoria:");?> <?php echo single_cat_title() ?></h1>
        <?php } else if (is_tag()) { ?>
            <h1 class="tag-title"><?php esc_html_e("Articoli con tag #");?><?php echo single_cat_title() ?></h1>
        <?php } else if (is_search()){ ?>
            <h1 class="search-title"><?php esc_html_e("Cerca: ");?> <strong><i><?php echo $s; ?></i></strong></h1>
        <?php } ?> 