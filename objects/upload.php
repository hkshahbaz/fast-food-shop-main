<?php
$target_dir="../upload/images";
if(!file_exists($target_dir)){
    mkdir($target_dir,0777,true);
}
$f_name = $_FILES['image']['name'];
$f_tmp  = $_FILES['image']['tmp_name'];
// $nameofimage = rand().'_'.time().".jpeg";
$f_extension = explode('.', $f_name); //explode() convert string into array form.
$f_extension = strtolower(end($f_extension)); // end() show the last index result of array.
$f_newfile = rand().'_'.time().".".$f_extension;

$target_dir=$target_dir."/".$f_newfile;

if($f_extension == 'jpg' || $f_extension == 'png' || $f_extension == 'gif' || $f_extension == 'jpeg')
{
    if(move_uploaded_file($f_tmp,$target_dir))
    {
        // echo "Target Achieved";
         // echo "$nameofimage";
        
        echo json_encode([
            "Message"=>$f_newfile,
            "Status"=>"OK"
        ]);
      
    }
    else{
        echo json_encode([
            "Message"=>"Pleaser choose image!",
            "Status"=>"Error"
        ]); 
    }
}
else{
    echo json_encode([
            "Message"=>"Invalid File Formate",
            "Status"=>"Error"
        ]);
}
