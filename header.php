<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <?php wp_head();?>
  </head>
  
  <body <?php body_class(); ?>>
    <main>

      <!-- header -->
      <header>
        <nav>
          <div class="logo">
            <a href="<?php echo esc_url(home_url()); ?>"><i class="far fa-moon"></i></a>
          </div>

          <?php
            wp_nav_menu(array(
              'theme_location' => 'primary'
            ));
          ?>
        </nav>

      </header>