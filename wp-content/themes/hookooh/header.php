<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
            <div class="container">
                <div class="col-sm-12">
                    <a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("title"); ?>" class="container-logo"><img src="<?= IMAGES_URL ?>/logo.png" alt="<?php bloginfo("title");?>" class="logo"></a>
                </div>
            </div>
        </header>