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
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>
    