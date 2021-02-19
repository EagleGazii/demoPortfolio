<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=portfolio", "gazi", "presheva");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Contact{

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
     $sql = "CREATE TABLE IF NOT EXISTS contacts (
        contact_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(100)
        )";
        
        $this->pdo->query($sql);
    }



    private function checkSameData(string $email,string $phone,$array) :int {
        
        
        $sql = "SELECT * from contacts where email = :email AND phone = :phone";
        $state = $this->pdo->prepare($sql);
        $state->execute($array);
        return $state->rowCount();
    }

    public function addNewRow(string $email,string $phone){
        $array = array(
            ':email' => $email,
            ':phone' => $phone
            
        );
        $check = $this->checkSameData($email,$phone,$array);
        if($check == 0){
            $sql = "INSERT INTO contacts(user_id,email,phone) VALUES ($this->userID,:email,:phone)";
            $state = $this->pdo->prepare($sql);
            $state->execute($array);
        }

    }

    public function getSelectStatement() {
        $sql = "SELECT email, phone from contacts";
        $state = $this->pdo->query($sql);
        $queryArray = array();
        while($row = $state->fetch(PDO::FETCH_ASSOC)){
            array_push($queryArray,array($row['email'],$row['phone']));
        }
        return $queryArray;
    }

   /*  public function deleteRow(int $contact_id){
        
        $sql = "DELETE FROM `contacts` WHERE contact_id=:contact_id";
        $state = $this->pdo->prepare($sql);
        $statement = $state->execute(array(
            ':contact_id' => $contact_id
        ));
    } */
}

$contact_object = new Contact($pdo,1);
$contact_object->checkDatabaseTable();
$contact_object->addNewRow("gazmorabdiu@hotmail.com","+381 62 153 57 37");
$contact_object->addNewRow("gazmor.abdiu@bil.omu.edu.tr","+90 553 124 13");


?>

