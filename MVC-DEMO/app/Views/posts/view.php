<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>
  <?php
  if(empty($_SESSION['username'])){
    header('Location:/users/login');
  }
 ?>
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php echo $content; ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="/posts/index">Back &rarr;</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
   <?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?> 