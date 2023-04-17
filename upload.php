<?php  
$target_dir = "images/";  
$target_file_name = $target_dir .basename($_FILES["file"]["name"]);  
$response = array();  

if (isset($_FILES["file"]))  
   {  
   if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_name)  )
      {  
        $arr = [
            'success' => true,
            'message' => "Thành công"
                 ];  
      }  
   else  
      {  
        $arr = [
            'success' => false,
            'message' => "Không Thành công"
                 ];  
      }  
   }  
else  
   {  
    $arr = [
        'success' => false,
        'message' => "loi"
             ];
   }  

   echo json_encode($arr);  
?>  
