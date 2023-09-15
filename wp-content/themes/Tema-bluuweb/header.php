<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');  ?>/css/bootstrap.min.css">
    <!--Styles-->
    <link rel="stylesheet" href="<?php bloginfo('template_url');  ?>style.css">
    <style>
        .suscribir{
        background: url("<?php bloginfo('template_url');  ?>/images/fondo.jpg");
        background-size: cover;
        background-position: center;
        height: 530px;
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <h3></h3>
    <!-- navbar -->
       <div class="container-fluid bg-dark fixed-top">
          <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark container">
            <a class="navbar-brand" href="#">
                <img src="images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- este menu lo incorpamos con las etiquetas wordpress
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
             </div> -->
             <?php   wp_nav_menu(array(
                  'theme_location' => 'superior',
                  'container' => 'div',   
                  'container_class' => 'collapse navbar-collapse',   
                  'container_id' => 'navbarSupportedContent',
                  'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
                  'menu_class' => 'nav-item'
             )); ?>


          </nav>
        </div>
    <!--fin navbar-->
    <!--Suscribir-->
      <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
         <div class="col-auto text-center text-white p-5">
            <h1 class="display-4">Moviles Shop</h1>
         </div>
         <form action="" class="form-inline flex-column flex-sm-row p-5" >
             <div class="form-group mr-sm-3">
                 <input type="text" placeholder="nombre" class="form-control">
             </div>
             <div class="form-group mr-sm-3">
                <input type="text" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
         </form>
      </div>