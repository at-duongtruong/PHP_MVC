<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>
<?php
  if(empty($_SESSION['username'])){
    header('Location:/users/login');
  }
 ?>
    <header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Add Post In Here</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form method="POST" action="/posts/add" enctype="multipart/form-data">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name = "title" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Description" name="decription" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>  
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Content</label>
                <input type="text" class="form-control" placeholder="Content" name="content" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <label>Picture</label>
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <input type="file" class="form-control" placeholder="" name="picture" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" name="add" value="Add" class="btn btn-primary">
              <a href="index"><input type="" name="" class="btn btn-primary" value="Back"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr>
   <?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?>
