<?php 
    include '../Classes/Userdetails.php';

    $insert = new Userinfo();
    // print_r($_GET); 

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    } else {
        echo "NO action Found"; 
        return false;
    }

    switch($action){
        case "user_create":
              $insert_user = $insert->createUser($_POST['username'], $_POST['useremail'], $_POST['userpass']);

              if(!empty($insert_user)){
                // echo "Data inserted";
                echo "<script>window.location.href='../Views/index.php</script>"; 
            } else {
                echo "Data error";
                // echo "<script>window.location.href='../register.php?status=0';</script>"; 
                
              }
    }

?>