<?php
/* session_start();
require_once ("../pdo/pdo.php");


  $sql = "SELECT title, github_link, photo_link from projects";
  $state = $pdo->query($sql);

   */

  require_once ("database_model/work_model.php");
  $array = $work_object->getSelectStatement();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

    <link rel="stylesheet" href="../css/main.php">
  <title>My Project</title>
</head>

<body>
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait"></div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link">
           Home
          </a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link">
            About Me
          </a>
        </li>
        <li class="nav-item current">
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
       <!--  </li> -->
      </ul>
    </nav>
  </header>

  <main id="work">
    <h1 class="lg-heading">
     My
      <span class="text-secondary">Projects</span>
    </h1>
    <?php
    /* if(isset($_SESSION['login'])){
      echo '<form method="POST">';
      echo '<input type ="submit" value="Edit" name="submit">';
      echo '</form>';
    } */
      ?>
    <div class="projects">
     
    <?php
      
     for ($i=0; $i <count($array ); $i++){
      echo '<div class="item">';
      echo '<a href="#!">';
      echo '<img src='.$array[$i][2].' alt="Project">';
      echo '<a href='.$array[$i][1].' class="btn-dark">';
      echo  '<i class="fab fa-github"></i> '.$array[$i][0]; 
      echo '</a>';
      echo '</div>';

     }     
     
        
       
      
    ?>
     
      
        
    

      
      
    </div>
  </main>

  <footer id="main-footer">
    Copyright &copy; <?echo date("Y")?>
  </footer>
  <script type="text/javascript" src="../js/main.js"></script>
  
</body>

</html>