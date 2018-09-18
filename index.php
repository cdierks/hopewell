<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <!-- FONTAWESOME -->
    <script defer="defer" src="<?php echo get_template_directory_uri(); ?>/design/js/fontawesome.js"></script>
    <script defer="defer" src="<?php echo get_template_directory_uri(); ?>/design/js/brands.js"></script>
    <script defer="defer" src="<?php echo get_template_directory_uri(); ?>/design/js/light.js"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/design/css/main.css">
    <!-- JAVASCRIPT -->
    <script src="<?php echo get_template_directory_uri(); ?>/design/js/navbar.js"></script>
  </head>

  <body>
    <header class="header">
      <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a href="#" id="navbarBurger" class="navbar-item brand is-uppercase has-text-weight-bold">Ponyhof-Leben</a>
          <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="navMenu" class="navbar-menu">
          <div class="navbar-start is-uppercase has-text-weight-light">
            <a href="#" class="navbar-item">Über Mich</a>
            <a href="#" class="navbar-item">Blog</a>
            <a href="#" class="navbar-item">Portfolio</a>
          </div>
          <div class="navbar-end is-uppercase has-text-weight-light">
            <a href="#" class="navbar-item">Impressum</a>
            <a href="#" class="navbar-item">Datenschutzerklärung</a>
          </div>
        </div>
      </nav>
      <div class="section">
        <div class="container">
          <div class="columns">
            <div class="column content has-text-centered header-title">
              <p class="is-size-2 has-text-white is-uppercase has-text-weight-light">Ponyhof-Leben</p>
              <p class="is-size-4 has-text-white-ter is-italic">Das Leben ist kein Ponyhof</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="columns is-centered">
          <div class="column content is-two-thirds">
            <article class="section">
              <h1>Dies ist ein Titel</h1>
              <p class="meta has-text-grey-light is-size-7">Verfasst von
                <a href="#">Christian W. Dierks</a>, eingeordnet unter
                <a href="#">Kategorie</a>.</p>
              <img src="/design/img/cover1.jpg" alt="Header Image" class="cover-image is-16by9">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius porro magni vero earum excepturi, asperiores possimus aut, sequi natus cum mollitia quod neque eos consequatur et perferendis necessitatibus sunt voluptate.</p>
              <a href="#" class="button is-primary">Weiterlesen ...</a>
              <hr>
            </article>
            <article class="section">
              <h1>Dies ist ein Titel</h1>
              <p class="meta has-text-grey-light is-size-7">Verfasst von
                <a href="#">Christian W. Dierks</a>, eingeordnet unter
                <a href="#">Kategorie</a>.</p>
              <img src="/design/img/cover1.jpg" alt="Header Image" class="cover-image is-16by9">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius porro magni vero earum excepturi, asperiores possimus aut, sequi natus cum mollitia quod neque eos consequatur et perferendis necessitatibus sunt voluptate.</p>
              <a href="#" class="button is-primary">Weiterlesen ...</a>
              <hr>
            </article>
            <article class="section">
              <h1>Dies ist ein Titel</h1>
              <p class="meta has-text-grey-light is-size-7">Verfasst von
                <a href="#">Christian W. Dierks</a>, eingeordnet unter
                <a href="#">Kategorie</a>.</p>
              <img src="/design/img/cover1.jpg" alt="Header Image" class="cover-image is-16by9">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius porro magni vero earum excepturi, asperiores possimus aut, sequi natus cum mollitia quod neque eos consequatur et perferendis necessitatibus sunt voluptate.</p>
              <a href="#" class="button is-primary">Weiterlesen ...</a>
              <hr>
            </article>
            <article class="section">
              <h1>Dies ist ein Titel</h1>
              <p class="meta has-text-grey-light is-size-7">Verfasst von
                <a href="#">Christian W. Dierks</a>, eingeordnet unter
                <a href="#">Kategorie</a>.</p>
              <img src="/design/img/cover1.jpg" alt="Header Image" class="cover-image is-16by9">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius porro magni vero earum excepturi, asperiores possimus aut, sequi natus cum mollitia quod neque eos consequatur et perferendis necessitatibus sunt voluptate.</p>
              <a href="#" class="button is-primary">Weiterlesen ...</a>
              <hr>
            </article>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer has-text-centered">
      <p>&copy; 2018 Christian William Dierks.</p>
      <p>Made with ❤️ in Rostock/Germany</p>
    </footer>
  </body>

</html>
