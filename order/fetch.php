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
    $emp = new user($db);
     
	$result = array('data' => array());


		// echo '<pre>',print_r($data),'</pre>';
		// exit();
	if(isset($_GET['token']))
	{
		$data = $emp->read_dropdown();
		foreach ($data as $key => $value) {

		$name = $value['first_name']. ' ' .$value['last_name'];
		$uid = $value['uid'];

			$result['data'][$key] = array(
				$uid,
				$name
				
			);
		} // /foreach

		echo json_encode($result);
	}
	else
	{
		$data = $emp->read();

		$serial = 1;
		$delete =0;
		foreach ($data as $key => $value) {

		$image = "<img src='".$value['image']."' height='100px' width='100px'>";
		$name = $value['first_name']. ' ' .$value['last_name'];
		$uid = "<td style='display:none'>".$value['uid']."</td>";
		$checkbox = "<input id='".$value['uid']."' type='checkbox' name='case' class='case' />";
		$buttons = '<div style="width:140px"><a style="margin-right:15px" class="btn blue pull-left count" type="button" href="edit_user.php?uid='.$value['uid'].'" >Edit</a>
			   		<button id="'.$delete++.'" onclick="confirmDelete('.$value['uid'].')" class="delete btn red pull-left" type="button">Delete</button></div>';

			$result['data'][$key] = array(
				$checkbox,
				$serial++,
				$value['user_id'],
				$name,
				$value['email'],
				$value['phone'],
				$image,
				$value['gender'],
				$value['address'],
				$value['password'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}
?>