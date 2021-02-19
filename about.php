
<?php
/* session_start(); */
require_once ("database_model/education_model.php");
require_once ("database_model/skill_model.php");
require_once ("database_model/user_model.php");

$education_array = $education_object->getSelectStatement();
$skill_array = $skill_object->getSelectStatement();
$user_array = $user_object->getSelectStatement();


/* 
$sql = "SELECT skill_name, progress from skills";
$state = $pdo->query($sql);

$user_id=1;
$sqlInfo = "SELECT nationality, age, bornplace, relationship from users where user_id=$user_id";
$infoState = $pdo->query($sqlInfo);
$info = $infoState->fetch(PDO::FETCH_ASSOC);

$sqlSchool = "SELECT country, city, school, degree, grade from education";
$schoolState = $pdo->query($sqlSchool); */
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
  <title>About Me</title>
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
        <li class="nav-item current">
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
           /*  if(isset($_SESSION['login'])){
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

  <main id="about">
    <h1 class="lg-heading">
     About
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
     Short autobiography
    </h2>
    <?php
    /* if(isset($_SESSION['login'])){
      echo '<form method="POST">';
      echo '<input type ="submit" value="Edit" name="submit">';
      echo '</form>';
    } */
      ?>
    <div class="about-info">
      <img src="../img/portrait_small.jpg" alt="Gazi" class="bio-image">

      <div class="bio">
        <h2 class="text-secondary">Biography</h2>
        <h4 class= "text-secondary"> Info </h4>
        
        <div id="info-grid">
        <?php
if(isset($user_array)){
  

  echo '<div class = "nationality">Nationality: '.$user_array[0][0].'</div>';
  echo '<div class = "bornplace">Born Place: '.$user_array[0][1].'</div>';
  echo '<div class = "age">Age: '.$user_array[0][2].'</div>';
  echo '<div class = "relationship">Relationship: '.$user_array[0][3].'</div>';
  
}      
?>
</div>



      <h4 class= "text-secondary"> Education </h4>
      
      <?php
       
          for ($i=0; $i < count($education_array); $i++) { 
            echo '<div id="education-grid">';
          echo '<div class = "country">Country: '.$education_array[$i][0].'</div>';
          echo '<div class = "city">City: '.$education_array[$i][1].'</div>';
          echo '<div class = "school">School: '.$education_array[$i][2].'</div>';
          echo '<div class = "degree">Degree: '.$education_array[$i][3].'</div>';
          echo '<div class = "grade">Grade: '.$education_array[$i][4].'</div>';
          echo '</div><br>';
          }
          
            
      ?>


      



      <br>

		

     
        
      
      <?php
        for ($i=0; $i < count($skill_array); $i++) { 
          echo ' <div class="job ">';
          echo '<h3>'.$skill_array[$i][0].'</h3>';
          echo '<progress value='.$skill_array[$i][1].' max="100"></progress>';
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
