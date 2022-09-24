<!DOCTYPE html>
<html>
  <head>
    <title>EventO</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">    
  </head>
  <body>
    <header>
      <div class="navbar navbar-dark bg-success shadow-sm fixed-top">
        <div class="container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <strong>EventO</strong>
          </a>
          <div style = "position:relative;left:300px;top:0.5px;">          
          <a class="btn btn-light" href="index.html" >Sign up</a>
          </div>
          <a class="btn btn-light" href="newEvent.php" >Add New Event</a>
        </div>
      </div>
    </header>
    <?php displayMessage(); ?>
    
