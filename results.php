<!DOCTYPE html>
<html lang="en-nz">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boogle</title>

  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="index.php">
         <img width="80px" class="logo-top" src="img/logo.png"/>
       </a>
     </div>

     <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        <li>
          <form action="results.php" method="GET">
            <div class="field top-bar-search" id="searchform">
              <input type="text" name="q" autofocus required value="$searchQuery" />
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h4>Search results for <strong>$searchQuery</strong></h4>
      <!-- Displayed results -->
      <ul class="list-group">
        <!-- Single Result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
          <a href="$url" class="notification-bar-title">
              $searchQuery['text']
            </a>
            <span class="text-muted">$searchQuery['url']</span>
          </div>
        </li>
        <!-- End of single result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
          <a href="$url" class="notification-bar-title">
              $searchQuery['text']
            </a>
            <span class="text-muted">$searchQuery['url']</span>
          </div>
        </li>
        <!-- End of single result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
          <a href="$url" class="notification-bar-title">
              $searchQuery['text']
            </a>
            <span class="text-muted">$searchQuery['url']</span>
          </div>
        </li>
        <!-- End of single result -->
      </ul>
    </div>
  </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <p class="pull-left"> Copyright &copy; Boogle 2017. All rights reserved. </p>
    <div class="pull-right">
      <ul class="nav nav-pills">
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
