<?php
$target_dir="../upload/audio";
if(!file_exists($target_dir)){
    mkdir($target_dir,0777,true);
}

$f_name = $_FILES['audioFile']['name'];
$f_tmp  = $_FILES['audioFile']['tmp_name'];
// $nameofimage = rand().'_'.time().".jpeg";
$f_extension = explode('.', $f_name); //explode() convert string into array form.
$f_extension = strtolower(end($f_extension)); // end() show the last index result of array.
$f_newfile = rand().'_'.time().".".$f_extension;

$target_dir=$target_dir."/".$f_newfile;

if($f_extension == 'mp3' || $f_extension == 'wav' || $f_extension == '3gp' || $f_extension == 'mp4')
{
    if(move_uploaded_file($f_tmp,$target_dir))
    {
        // echo "Target Achieved";
         // echo "$nameofimage";
        
        echo json_encode(
            $f_newfile 
        );
      
    }
    else{
        echo json_encode([
            "Message"=>"BadHappened",
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
