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
     
    if(isset($_POST['password'])){

        print_r($_POST);
        $admin->admin_password = $_POST['password'];
        $admin->aid            = $_POST['aid'];

        $stmt = $admin->update();
        if($stmt){

            header("location: ../deskboard.php?message=success");
        }
         
        else{

            header("location: ../index.php?message=failed");
        }
    }
?>