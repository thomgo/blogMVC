<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Roboto" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
      <div class="jumbotron jumbotron-fluid text-center py-4 mb-5 backgroundLight" id="headerJumbo">
        <header class="container">
          <h1 class="display-4"><?php echo $site_information["main_title"]; ?></h1>
          <p class="lead"><?php echo $site_information["catcher"]; ?></p>
        </header>
        <a class="btn btn-secondary" href="../controleur/admin/login.php" id="login">
          Espace admin 
          <i class="fas fa-user-shield"></i>
        </a>
      </div>
