<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=portfolio", "gazi", "presheva");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Education{

    private PDO $pdo;
    private int $userID;
    public function __construct(PDO $pdo = null, int $userID) {
        $this->userID = $userID;
        if($pdo !== null) {
            $this->pdo = $pdo;
        }
    } 

    public function checkDatabaseTable(){
        // sql to create table
     $sql = "CREATE TABLE IF NOT EXISTS education (
        education_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        country VARCHAR(20) NOT NULL,
        city VARCHAR(20),
        school VARCHAR(20),
        degree VARCHAR(20),
        grade VARCHAR(20)
        )";
        
        $this->pdo->query($sql);
    }

    
    


    private function checkSameData(string $country,string $city, string $school, string $degree, string $grade, $array) :int {
        
        
        $sql = "SELECT * from education where country = :country AND city = :city AND school = :school AND degree = :degree AND grade = :grade";
        $state = $this->pdo->prepare($sql);
        $state->execute($array);
        return $state->rowCount();
    }

    public function addNewRow(string $country,string $city, string $school, string $degree, string $grade){
        $array = array(
            ':country' => $country,
            ':city' => $city,
            ':school' => $school,
            ':degree' => $degree,
            ':grade' => $grade
            
        );
        $check = $this->checkSameData($country,$city, $school, $degree, $grade,$array);
        if($check == 0){
            $sql = "INSERT INTO education(user_id,country,city,school,degree,grade) VALUES ($this->userID,:country,:city,:school,:degree,:grade)";
            $state = $this->pdo->prepare($sql);
            $state->execute($array);
        }

    }

    public function getSelectStatement() {
        $sql = "SELECT country, city, school, degree, grade from education";
        $state = $this->pdo->query($sql);
        $queryArray = array();
        while($row = $state->fetch(PDO::FETCH_ASSOC)){
            array_push($queryArray,array($row['country'],$row['city'],$row['school'],$row['degree'], $row['grade']));
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

$education_object = new Education($pdo,1);
$education_object->checkDatabaseTable();
$education_object->addNewRow("Serbia","Presheva","Skenderbeu","High-School","4.7");
$education_object->addNewRow("Turkey","Samsun","Ondokuz Mayis","Bachelor","2.94");


?>