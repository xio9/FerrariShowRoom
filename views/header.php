<!doctype html>
<html lang="ru">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a id="about" class="nav-link" href="?page=about.php">Главная</a>
      </li>
      <li class="nav-item">
        <a id="msg" class="nav-link" href="?page=main.php">Мои заявки</a>
      </li>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <?php if ($_SESSION['log']) { ?>
      
      <a class="btn btn-primary" href="?action=Logout" id="exit">Выход</a>

    
    
    <?php } ?>
      
    </form>
</nav>