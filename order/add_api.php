<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
     
    // get database connection
    include_once '../config/database.php';
     
    // instantiate object
    include_once '../objects/user.php';
     
    $database = new Database();
    $db = $database->getConnection();
     
    $user = new User($db);

    // get usered data
    $data = json_decode(file_get_contents("php://input"));

    // set product property values

        $user->user_id      = $data->user_id;
        $user->user_fname   = $data->user_fname;
        $user->user_lname   = $data->user_lname;
        $user->user_email   = $data->user_email;
        $user->user_phone   = $data->user_phone;
        $user->user_image   = $data->user_image;
        $user->user_gender  = $data->user_gender;
        $user->user_address = $data->user_address;
        $user->user_password = $data->user_password;
    // $user->user_update_datetime = date('Y-m-d');

// echo $data->user_url;

    // create
    if($user->create()){
        $create =array(
        "message"   => "True"
    );
    }
     
    // if unable to create
    else{
        $create =array(
        "message"   => "False"
    );
    }
    echo json_encode($create);
?>