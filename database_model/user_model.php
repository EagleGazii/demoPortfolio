


<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=portfolio", "gazi", "presheva");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class User{

    private PDO $pdo;
    private int $userID;
    public function __construct(PDO $pdo = null) {
        
        if($pdo !== null) {
            $this->pdo = $pdo;
        }
    }

    public function checkDatabaseTable(){
        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS users (
            user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(20) NOT NULL,
            pass VARCHAR(20) NOT NULL,
            firstName VARCHAR(20) NOT NULL,
            lastName VARCHAR(20) NOT NULL,
            nationality VARCHAR(20) NOT NULL,
            age TINYINT UNSIGNED NOT NULL,
            bornplace VARCHAR(20) NOT NULL,
            relationship VARCHAR(20) NOT NULL
            )";
            
            $this->pdo->query($sql); 
    }

    
    
    private function checkSameData(string $username,string $pass, string $firstName, string $lastName, string $nationality, string $age, string $bornplace, string $relationship, $array) :int {
        
        
        $sql = "SELECT * from users where username = :username AND pass = :pass AND firstName = :firstName AND lastName = :lastName AND age = :age AND nationality = :nationality AND bornplace = :bornplace AND relationship = :relationship";
        
        
        $state = $this->pdo->prepare($sql);
        $state->execute($array);
        return $state->rowCount();
    }

    public function addNewRow(string $username,string $pass, string $firstName, string $lastName, string $nationality, string $age, string $bornplace,string $relationship){
        $array = array(
            ':username' => $username,
            ':pass' => $pass,
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':nationality' => $nationality,
            ':age' => $age,
            ':bornplace' => $bornplace,
            ':relationship' => $relationship
            
        );
        $check = $this->checkSameData($username,$pass, $firstName, $lastName, $nationality,$age,$bornplace,$relationship,$array);
        if($check == 0){
            $sql = "INSERT INTO users(username,pass,firstName,lastName,nationality,age,bornplace,relationship) VALUES (:username,:pass,:firstName,:lastName,:nationality,:age,:bornplace,:relationship)";
            $state = $this->pdo->prepare($sql);
            $state->execute($array);
        }

    }

    public function getSelectStatement() {
        $sql = "SELECT  nationality, age, bornplace, relationship from users";
        $state = $this->pdo->query($sql);
        $queryArray = array();
        while($row = $state->fetch(PDO::FETCH_ASSOC)){
            array_push($queryArray,array($row['nationality'],$row['age'], $row['bornplace'], $row['relationship']));
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

$user_object = new User($pdo);
$user_object->checkDatabaseTable();
$user_object->addNewRow("eaglegazi","presheva123","Gazmor","Abdiu","Albania","24","Presevo","single");


?>
