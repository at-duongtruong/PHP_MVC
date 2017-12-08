<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>
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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto"> 
          <?php
            foreach ($list as $key) { ?>
          <div class="post-preview">
            <a href="/posts/view/<?php echo $key['id'];?>">
              <h2 class="post-title">
                <?php echo $key['title']; ?>
              </h2>
              <img src="/<?php echo $key['picture']; ?>">
              <h3 class="post-subtitle">
                <?php echo $key['description']; ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#"><?php echo $key['author']; ?></a>
              on <?php echo $key['created_at']; ?></p>
          </div>
          <hr>
     <?php } ?>
        </div>
      </div>
    </div>
    <?php for ($i=0; $i <$rownum ; $i++) { 
    ?>
    <a  href="<?php echo '/posts/index/'.$i ?>"><?php echo $i+1 ?></a>
    <?php
    }
    ?>
    <hr>
   <?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?> 