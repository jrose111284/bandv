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
          <a href="#" class="btn">Read More</a>
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
  <!-- <div class="jumbotron jumbotron-special">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>lorem ipsum </h1>
          <p>  Lorem ipsum dolor sit amet ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>
            Lorem ipsum dolor sit amet ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Lorem ipsum dolor sit amet ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
    </div>
  </div> -->

  <section id="middle">
    <h1>lorem ipsum</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4 one">
          <div class="box-1">
            <h2>lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
        <div class="col-md-4 two">
          <div class="box-2">
            <h2>lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
        <div class="col-md-4 three">
          <div class="box-3">
            <h2>lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <form>
    <h1>Contact Us</h1>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 form-control-label">First Name *</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="inputEmail3" placeholder="First Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 form-control-label">Last Name *</label>
      <div class="col-sm-10">
        <input type="last-name" class="form-control" id="inputPassword3" placeholder="Last Name">
    </div>
    </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Email *</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Contact Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Contact Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Message</label>
    <div class="col-md-10">
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
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
      <button type="submit" class="btn btn-secondary">Submit</button>
    </div>
  </div>
</form>


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
