<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=portfolio", "gazi", "presheva");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




class Project{

    private PDO $pdo;
    private int $userID;
    public function __construct(PDO $pdo = null,int $userID) {
        $this->userID = $userID;
        if($pdo !== null) {
            $this->pdo = $pdo;
        }
    } 
   



    public function checkDatabaseTable(){
        // sql to create table
     $sql = "CREATE TABLE IF NOT EXISTS projects (
        project_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        title VARCHAR(100) NOT NULL,
        project_link VARCHAR(100),
        photo_link VARCHAR(100)
        )";
        
        $this->pdo->query($sql);
    }

    private function checkSameData(string $title,string $project_link, string $photo_link, $array) :int {
        
        
        $sql = "SELECT * from projects where title = :title AND project_link = :project_link AND photo_link = :photo_link";
        $state = $this->pdo->prepare($sql);
        $state->execute($array);
        return $state->rowCount();
    }

    public function addNewRow(string $title,string $project_link, string $photo_link){
        $array = array(
            ':title' => $title,
            ':project_link' => $project_link,
            ':photo_link' => $photo_link
            
        );
        $check = $this->checkSameData($title,$project_link,$photo_link,$array);
        if($check == 0){
            $sql = "INSERT INTO projects(user_id,title,project_link,photo_link) VALUES ($this->userID,:title,:project_link,:photo_link)";
            $state = $this->pdo->prepare($sql);
            $state->execute($array);
        }

    }

    public function getSelectStatement() {
        $sql = "SELECT title, project_link, photo_link from projects";
        $state = $this->pdo->query($sql);
        $queryArray = array();
        while($row = $state->fetch(PDO::FETCH_ASSOC)){
            array_push($queryArray,array($row['title'],$row['project_link'],$row['photo_link']));
        }
        return $queryArray;
    }
    /* public function addNewRow(string $title, string $github_link, string $photo_link){
        $sql = "INSERT INTO projects(user_id,email,phone) VALUES (1,:userID,:email,:phone)";
        $state = $this->pdo->prepare($sql);
        $statement = $state->execute(array(
            ':userID' => $this->userID,
            ':email' => $email,
            ':phone' => $phone
        ));
    } */

    /* public function deleteRow(int $contact_id){
        
        $sql = "DELETE FROM `contacts` WHERE contact_id=:contact_id";
        $state = $this->pdo->prepare($sql);
        $statement = $state->execute(array(
            ':contact_id' => $contact_id
        ));
    } */
}

$work_object = new Project($pdo,1);
$work_object->checkDatabaseTable();
$work_object->addNewRow("Photo Gallery - Grid Layout","https://github.com/EagleGazii/web-development/tree/main/Photo%20Gallery","https://wonderfulengineering.com/wp-content/uploads/2014/07/Hi-Tech-Wallpaper-24.jpg");

?>