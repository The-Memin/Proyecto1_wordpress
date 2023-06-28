<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <title>Theme 1</title>
  </head>
  <body>
    <!-- navbar-->
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand display-flex align-items-center text-white" href="#">
                    <img src="./images/bootstrap-solid.svg" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
                    Bootstrap
                  </a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <?php  wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'items_wrap' => '<ul class="navbar-nav ml-auto mb-2 mb-lg-0 text-center">%3$s</ul>',
                'menu_class' => 'nav-item'
            ));?>
          </nav>
    </div>
    <!-- finnavbar -->

    <!-- suscribir -->
    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
        <div class="text-center text-white">
            <h1 class="display-4">
                Lorem ipsum dolor sit amet
            </h1>
        </div>
        <form action="" class="form-inline flex-column flex-sm-row">
            <div class="form-group mr-sm-3">
                <input type="text" name="" id="" placeholder="nombre" class="form-control">
            </div>
            <div class="form-group mr-sm-3">
                <input type="text" name="" id="" placeholder="Email" class="form-control">
            </div>
            <div class="form-group mr-sm-3">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
    <!-- fin suscribir -->