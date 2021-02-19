
<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=portfolio", "gazi", "presheva");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Skill{

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
     $sql = "CREATE TABLE IF NOT EXISTS skills (
        skill_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        skill_name VARCHAR(20) NOT NULL,
        progress VARCHAR(20) NOT NULL
        )";
        
        $this->pdo->query($sql);
    }

    private function checkSameData(string $skill_name,string $progress, $array) :int {
        
        
        $sql = "SELECT * from skills where skill_name = :skill_name AND progress = :progress";
        $state = $this->pdo->prepare($sql);
        $state->execute($array);
        return $state->rowCount();
    }

    public function addNewRow(string $skill_name,string $progress){
        $array = array(
            ':skill_name' => $skill_name,
            ':progress' => $progress
            
        );
        $check = $this->checkSameData($skill_name,$progress, $array);
        if($check == 0){
            $sql = "INSERT INTO skills(user_id,skill_name,progress) VALUES ($this->userID,:skill_name,:progress)";
            $state = $this->pdo->prepare($sql);
            $state->execute($array);
        }

    }

    public function getSelectStatement() {
        $sql = "SELECT skill_name, progress from skills";
        $state = $this->pdo->query($sql);
        $queryArray = array();
        while($row = $state->fetch(PDO::FETCH_ASSOC)){
            array_push($queryArray,array($row['skill_name'],$row['progress']));
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

$skill_object = new Skill($pdo,1);
$skill_object->checkDatabaseTable();
$skill_object->addNewRow("Java","60");
$skill_object->addNewRow("C#","50");

?>