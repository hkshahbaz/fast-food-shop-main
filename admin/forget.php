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
     
    if(isset($_GET['email'])){

        $admin->admin_email =$_GET['email'];
        $stmt = $admin->forget();
        // print_r($stmt); exit();
        $num = $stmt->rowCount();
        // check if more than 0 record found
        if($num>0){

            $password = '';

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
         
                $admin_item=array(
                    "password"      => $password
                );
            
            }

            $password   = $admin_item['password'];
            $to         = $_GET['email'];
            $subject = "Your Recovered Password";
            $message = "Please use this password to login " . $password;
            $headers = "From : testing.techmelo.com";
            if(mail($to, $subject, $message, $headers)){

                header("location: ../index.php?message=mailsent");
            }
            else{
                header("location: ../index.php?message=mailnotsent");
            }
            
        }
         
        else{

            header("location: ../index.php?message=incorrect");
        }
    }
?>