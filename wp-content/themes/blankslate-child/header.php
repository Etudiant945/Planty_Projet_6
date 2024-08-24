<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header class="tete">
    <!-- Logo du site -->
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img class="tete_img" src="http://planty.local/wp-content/uploads/2024/08/Logo.png" alt="<?php bloginfo('name'); ?>">
    </a>
    <!-- Menu de navigation -->
    <nav>
        <a href="<?php echo esc_url(home_url('/nous-rencontrer/')); ?>">Nous rencontrer</a>
        <?php
        // Affiche le bouton seulement pour les administrateurs
        if (current_user_can('administrator')) {
            echo '<a href="http://planty.local/wp-admin" class="admin-button">Admin</a>';
        }
        ?>
        <a href="<?php echo esc_url(home_url('/precommande/')); ?>" class="commander">Commander</a>
    </nav>
</header>
<div id="container">
    <main id="content" role="main">