<?php
// required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
     
    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/user.php';
     
    // instantiate database and object
    $database = new Database();
    $db = $database->getConnection();
     
    // initialize object
    $user = new User($db);
     
    if(isset($_GET['user_email']) && isset($_GET['user_password'])){
        $user->user_email =$_GET['user_email'];
        $user->user_password =$_GET['user_password'];
        $stmt = $user->login();
        // print_r($stmt); exit();
        $num = $stmt->rowCount();
        // check if more than 0 record found
        if($num>0){
            
            // user array
            $user_arr=array();
            $user_arr["records"]=array();
            
            $uid = 0;
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
         
                $user_item=array(
                    "uid"   => $uid,
                    "message" => "true"
                );
         
                array_push($user_arr["records"], $user_item);
            }
         
            echo json_encode($user_arr);
        }
         
        else{
            echo json_encode(
                array("message" => "false")
            );
        }
    }


?>