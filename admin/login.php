<?php
session_start();
// required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
     
    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/admin.php';
     
    // instantiate database and object
    $database = new Database();
    $db = $database->getConnection();
     
    // initialize object
    $admin = new Admin($db);
     
    if(isset($_GET['username']) && isset($_GET['password'])){

        $admin->admin_username =$_GET['username'];
        $admin->admin_password =$_GET['password'];
        $stmt = $admin->login();
        // print_r($stmt); exit();
        $num = $stmt->rowCount();
        // check if more than 0 record found
        if($num>0){

            $aid = 0;
            $first_name = '';
            $last_name = '';

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
         
                $admin_item=array(
                    "aid"           => $aid,
                    "first_name"    => $first_name,
                    "last_name"     => $last_name,
                    "message"       => "true"
                );
            
            }
            header("location: ../deskboard.php?message=true");
            $_SESSION["aid"]= $admin_item['aid'];
            $_SESSION["name"]= $admin_item['first_name'].' '.$admin_item['last_name'];
            $_SESSION["msg"]= "Login Successfully!";
            // $_SESSION['time_start_login'] = time();
            // print_r($_SESSION["msg"]);
        }
         
        else{

            header("location: ../index.php?message=false");
        }
    }
?>