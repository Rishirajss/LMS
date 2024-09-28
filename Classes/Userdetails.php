<?php

include 'Dbconnection.php';

class Userinfo {
    private $conn;

    public function __construct() {
        $database = new Dbconnection();
        $this->conn = $database->getConnection();
    }

    public function createUser($username, $useremail, $userpass) {
        $stmt = $this->conn->prepare("INSERT INTO `userinfo` (`username`, `useremail`, `userpass`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $useremail, $userpass);

        if ($stmt->execute()) {
            echo "Data inserted";
            echo "<script>window.location.href='../Views/index.php';</script>";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $stmt->close();
    }

    public function loginUser($loginemail, $loginpass){

        $sel = $this->conn->prepare("SELECT * FROM `userinfo` WHERE `useremail` = '$loginemail' AND 'userpass' = '$loginpass'");
        
        if($sel->execute()){
            echo "Logged in";
        } else {
            echo "Check Username and password";
        }

        $sel->close();
        
    }
}
?>
    