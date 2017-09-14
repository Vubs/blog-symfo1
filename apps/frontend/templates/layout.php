<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture() ?>">
  <head>
    <meta name="viewport" content="width=device-width">
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>
    
    <section id="content">
      <div class="container">
        <?php echo $sf_content ?>
      </div>
    </section>
    
  </body>
</html>
