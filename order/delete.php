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
    
    if(isset($_GET['token'])){

        $user_id = $_GET['uid'];

         // delete
        $check = $user->delete($user_id);
        if($check){
            header("location: ../manage_users.php?message=deletesuccessfully");
        }
         
        // if unable to delete
        else{
            header("location: ../manage_users.php?message=notdeleted");
        } 
    }
    else
    {   
        $user_id = $_GET['uid'];
        $check = $user->deleteAll($user_id);

        if($check)
        {    
            $data['response'] = $check;
        }
        else
        {
            $data['response']= $check;
        }
        echo json_encode($data);
    }
       
?>