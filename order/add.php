<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
     
    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/order.php';
     
    // instantiate database and object
    $database = new Database();
    $db = $database->getConnection();
     
    // initialize object
    $user = new Order($db);

    // $content = file_get_contents("php://input");
    // $decoded = json_decode($content, true);
    $data = $_POST['order1'];

    echo json_encode(array('data' => $data));exit;
    // code for image 
    $save_file_path_db = "upload/images";
    $target_dir="../upload/images";
        if(!file_exists($target_dir)){
            mkdir($target_dir,0777,true);
        }
    $f_name = $_FILES['user_image']['name'];
    $f_tmp  = $_FILES['user_image']['tmp_name'];

    $f_extension = explode('.', $f_name); //explode() convert string into array form.
    $f_extension = strtolower(end($f_extension)); // end() show the last index result of array.
    $f_newfile = rand().'_'.time().".".$f_extension;

    $target_dir = $target_dir."/".$f_newfile;

    $save_file_path_db = $save_file_path_db."/".$f_newfile;
    if(move_uploaded_file($f_tmp,$target_dir))
    {
        $user->user_id        = $_POST['user_id'];
        $user->user_fname     = $_POST['user_fname'];
        $user->user_lname     = $_POST['user_lname'];
        $user->user_email     = $_POST['user_email'];
        $user->user_phone     = $_POST['user_phone'];
        $user->user_image     = $save_file_path_db;
        $user->user_gender    = $_POST['user_gender'];
        $user->user_address   = $_POST['user_address'];
        $user->user_password  = $_POST['user_password'];

    if(!empty($user->user_id)){
            // create
            $check = $user->create();
            // print_r($check);exit;
            if($check){
                 header("location: ../manage_users.php?message=true");
            }
             elseif($check=="exists"){
                header("location: ../manage_users.php?message=exists");
             }
            // if unable to create
            else{
                header("location: ../manage_users.php?message=false");
            }
        }
    }
    else{
        echo json_encode([
            "Message"=>"BadHappened",
            "Status"=>"Error"
        ]); 
    }

    


?>