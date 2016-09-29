<?php
 if(is_uploaded_file($_FILES['upload_file']['tmp_name'])){

     $upfile=$_FILES["upload_file"];

     $name=$upfile["name"];
     $type=$upfile["type"];
     $size=$upfile["size"];
     $tmp_name=$upfile["tmp_name"];
     $error=$upfile["error"];

 }


$time = time();
//echo $name;
if($error=='0'){
    $file_dir = 'uploads/'.$time.$name;
    move_uploaded_file($tmp_name,$file_dir);
    $arr = array(
        'success'=>true,
        'msg'=>'',
        'file_path'=>$file_dir
    );
    echo json_encode($arr);
}else{
    $arr = array(
        'success'=>false,
        'msg'=>$error,
    );
    echo json_encode($arr);
}