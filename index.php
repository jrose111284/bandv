<?php session_start();

require_once 'helpers/security.php';


$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starter Template for Bootstrap</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <link href="css/bootstrap.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="pull-left"><img src="img/logo.png"></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">About</a></li>
          <li><a href="#about">Services</a></li>
          <li><a href="#about">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>lorem ipsum dolor sit amet</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">lorem ipsum</h1>
      <p class="lead">Lorem ipsum dolor sit amet ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  <section id="middle">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box-1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box-2">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box-3">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <form action="contact.php" method="post">
    <h1>Contact Us</h1>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 form-control-label">First Name</label>
      <div class="col-sm-10">
          <input type="text" name="name" class="form-control" id="inputPassword3" placeholder="Last Name" autocomplete="off" <?php echo isset($fields['name']) ? 'value="' . e($fields['name']) . '"' : ''?>>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 form-control-label">Last Name</label>
      <div class="col-sm-10">
        <input type="text" name="last" class="form-control" id="inputPassword3" placeholder="Last Name"<?php echo isset($fields['last']) ? 'value="' . e($fields['last']) . '"' : ''?>>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 form-control-label">Email</label>
      <div class="col-sm-10">
        <input type="text" name="email" autocomplete="off" class="form-control" id="inputPassword3" placeholder="email" <?php echo isset($fields['email']) ? 'value="' . e($fields['email']) . '"' : ''?>>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 form-control-label">Contact Number</label>
      <div class="col-sm-10">
        <input type="text" name="contact" class="form-control" id="inputPassword3" placeholder="Contact Number"<?php echo isset($fields['contact']) ? 'value="' . e($fields['contact']) . '"' : ''?>>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 form-control-label">Message</label>
      <div class="col-md-10">
          <textarea name="message" rows="8"><?php echo isset($fields['message']) ? e($fields['message']) : ''?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="send">
      </div>
    </div>
    <div class="panel">
      <!-- errors will go here -->
    </div>
  </form>

<div class="contect">
  <?php if(!empty($errors)); ?>
  <div class="panel">
    <ul><li><?php echo implode('</li><li>', $errors) ?></li></ul>
  </div>




  <!-- <form action="contact.php" method="post">
    <label>
      your name *
      <input type="text" name="name" autocomplete="off" <?php echo isset($fields['name']) ? 'value="' . e($fields['name']) . '"' : ''?>>
    </label>
    <label>
      your email address *
      <input type="text" name="email" autocomplete="off" <?php echo isset($fields['email']) ? 'value="' . e($fields['email']) . '"' : ''?>>
    </label>
    <label>
      your message *
      <textarea name="message" rows="8"><?php echo isset($fields['message']) ? e($fields['message']) : ''?></textarea>
    </label>
    <p class="muted">* means a required fileds

    </p>

    <input type="submit" value="send">
  </form>
  </div> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>

  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
<footer>
  <div class="container foot">
    <p>
      Copyrights &copy; 2016, All rights reserved
    </p>

  </div>
</footer>
</html>
<?php
 unset($_SESSION['error']);
 unset($_SESSION['fields']);

 ?>
