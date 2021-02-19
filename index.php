<?php
/* session_start(); */
  require_once ("database_model/user_model.php");
  
  
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.php">
  <title>Welcome</title>
</head>

<body id="bg-img">
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait_small"></div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item current">
          <a href="index.php" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link">
            About Me
          </a>
        </li>
        <li class="nav-item">
          <a href="work.php" class="nav-link">
           Projects
          </a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link">
          Contact
          </a>
        </li>
       <!--  <li class="nav-item"> -->
        <?php
            /* if(isset($_SESSION['login'])){
                echo '<a href= "../logout.php" class="nav-link">';
                echo 'Sing Out';
                echo '</a>';
            }else{
                echo '<a href= "../login.php" class="nav-link">';
                echo 'Sing In';
                echo '</a>';
            } */
        ?>
        <!-- </li> -->
      </ul>
    </nav>
  </header>

  <main id="home">
    <h1 class="lg-heading">
    Gazmor
      <span class="text-secondary">Abdiu</span>
    </h1>
    <h2 class="sm-heading">
     Computer Engineer 
    </h2>
    <div class="icons">
      <a href="https://www.instagram.com/gazmorabdiu/">
        <i class="fab fa-instagram fa-3x"></i>
      </a>
      <a href="https://www.linkedin.com/in/gazmor-abdiu-b5b972156/">
        <i class="fab fa-linkedin fa-3x"></i>
      </a>
      <a href="https://github.com/EagleGazii">
        <i class="fab fa-github fa-3x"></i>
      </a>
    </div>
    
  </main>
  
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>