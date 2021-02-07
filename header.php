<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koşulsuz Adalet Hareketi</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="top">
        <div class="container">
          <?php wp_nav_menu (
            array(
              'theme_location' => 'top-menu',
              'menu_class' => 'navigation'
            )
            )
             ?>
        </div>
    </header>
