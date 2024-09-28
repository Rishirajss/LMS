<?php

include '../Classes/Userdetails.php';

$insert = new Userinfo(); 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Collect form data
//     $username = trim($_POST['username']);
//     $useremail = trim($_POST['useremail']);
//     $userpass = trim($_POST['userpass']);

//     // Basic validation
//     if (!empty($username) && !empty($useremail) && !empty($userpass)) {
//         $userInfo = new Userinfo();
//         $userpassHash = password_hash($userpass, PASSWORD_DEFAULT);
//         $userInfo->createUser($username, $useremail, $userpassHash);
//     } else {
//         echo "Please fill in all fields.";
//     }
// }





if(isset($_GET['action'])){
    $action=$_GET['action'];
} else {
    echo "No action found"; return false;
}


switch($action)
{
    case "user_create":
        $insert_student = $insert->createUser($_POST['username'], $_POST['father_name'], $_POST['dob'], $_POST['pre_college'], $_POST['pre_subject'], $_POST['curr_course']);
        if(!empty($insert_student))
        {echo "<script>window.location.href='../Views/index.php';</script>";}
        else
        {echo "<script>window.location.href='../Views/register.php';</script>";}
        break;
    
    case "user_login":
        $login_student = $insert->loginUser($_POST['loginemail'], $_POST['loginpass']);

        if(!empty($login_student)){
            echo "logged-in";
            header("Location: home.php");
        } else {
            echo "logged-in failed";
        }

}
?>