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
     
    if(isset($_GET['uid'])){
        $uid =$_GET['uid'];
        $stmt = $user->readOne($uid);
        $num = $stmt->rowCount();
        
        // check if more than 0 record found
        if($num>0){
            
            // user array
            $user_arr=array();
            $user_arr["records"]=array();
            
            $uid = 0;
            $user_id =0;
            $first_name="";
            $last_name="";
            $email="";
            $phone="";
            $image="";
            $gender="";
            $address="";
            $password="";
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
         
                $user_item=array(
                    "uid"   => $uid,
                    "user_id" => $user_id,
                    "user_fname" => $first_name,
                    "user_lname" => $last_name,
                    "user_email" => $email,
                    "user_phone" => $phone,
                    "user_image" => $image,
                    "user_gender" => $gender,
                    "user_password" => $password,
                    "user_address" => $address
                );
         
                array_push($user_arr["records"], $user_item);
            }
         
            echo json_encode($user_arr);
        }
         
        else{
            echo json_encode(
                array("message" => "No Users found.")
            );
        }
    }
    else{
        
        $stmt = $user->read();
        $num = $stmt->rowCount();
        
        // check if more than 0 record found
        if($num>0){
            
            // user array
            $user_arr=array();
            $user_arr["records"]=array();
            
            $uid = 0;
            $User_id =0;
            $first_name="";
            $last_name="";
            $email="";
            $phone="";
            $image="";
            $gender="";
            $address="";
            $password="";
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
         
                $user_item=array(
                    "uid"   => $uid,
                    "user_id" => $User_id,
                    "user_fname" => $first_name,
                    "user_lname" => $last_name,
                    "user_email" => $email,
                    "user_phone" => $phone,
                    "user_image" => $image,
                    "user_gender" => $gender,
                    "user_address"  => $address,
                    "password"      => $password
                );
         
                array_push($user_arr["records"], $user_item);
            }
         
            echo json_encode($user_arr);
        }
         
        else{
            echo json_encode(
                array("message" => "No Userss found.")
            );
        }
    }

?>