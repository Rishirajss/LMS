<?php

include '../Classes/Userdetails.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = trim($_POST['username']);
    $useremail = trim($_POST['useremail']);
    $userpass = trim($_POST['userpass']);

    // Basic validation
    if (!empty($username) && !empty($useremail) && !empty($userpass)) {
        $userInfo = new Userinfo();
        $userpassHash = password_hash($userpass, PASSWORD_DEFAULT);
        $userInfo->createUser($username, $useremail, $userpassHash);
    } else {
        echo "Please fill in all fields.";
    }
}
?>