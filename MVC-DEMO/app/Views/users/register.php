<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>
    <header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
          <form name="sentMessage" id="contactForm"  action="/users/register" method="POST">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" required data-validation-required-message="Please enter your name." value="<?php echo isset($username) ? $username : ''; ?>">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>PassWord</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="Please enter your email address." <?php echo isset($password) ? $password : ''; ?>>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Fullname</label>
                <input type="text" class="form-control" placeholder="Fullname" name="fullname" required data-validation-required-message="Please enter your email address." <?php echo isset($fullname) ? $fullname : ''; ?> >
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="submit">Register</button>
              <a href="login"><input type="button" name="" class="btn btn-primary" value="Back"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr>
   <?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?>
