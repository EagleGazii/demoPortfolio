
<?php
/* session_start(); */
      require_once ("database_model/contact_model.php");
      $array = $contact_object->getSelectStatement();

  /* if(isset($_POST['submit'])){
    header("Location: ../crud/edit.php");
    return;
  } */
   //dy ndryshoret e para per momentin spo perdoren
  //$object->addNewRow('example@gmail.com', '+381 62 153 57 37');
  //$object->deleteRow(5);
  
  

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
  <title>Contact</title>
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
        <li class="nav-item">
          <a href="work.php" class="nav-link">
            Projects
          </a>
        </li>
        <li class="nav-item current">
          <a href="contact.php" class="nav-link">
            Contact
          </a>
        </li>
        <!-- <li class="nav-item"> -->
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

  <main id="contact">
    <h1 class="lg-heading">
      For 
      <span class="text-secondary">Contacting Me</span>
    </h1>
    
    
    <?php
    /* if(isset($_SESSION['login'])){
      echo '<form method="POST">';
      echo '<input type ="submit" value="Edit" name="submit">';
      echo '</form>';
    } */
      ?>
      <div class="boxes">
      
      <?php
      
      for ($i=0; $i < count($array); $i++) { 
        echo '<div>';
        echo '<span class="text-secondary">';
        echo 'Email: ';
        echo '</span>';
        echo  $array[$i][0]; 
        echo '</div>';
        echo '<div>';
        echo '<span class="text-secondary">';
        echo 'Phone: ';
        echo '</span>';
        echo  $array[$i][1];  
        echo '</div>';
      }
        
      
    ?>


     
      
      
    </div>
  </main>

  <footer id="main-footer">
    Copyright &copy; <?echo date("Y")?>
  </footer>

  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>