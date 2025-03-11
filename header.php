<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class = "top-bar">
            <div class="logo">
                Logo
            </div>
            <div class="searchbox">
                Search
            </div>
        </section>
        <section class="menu-area">
            <nav class="main-menu">
                <?php wp_nav_menu(
                    array('theme_location' => 'wp_devs_main_menu', 'depth' =>2));
                ?>
            </nav>
        </section>
    </header>