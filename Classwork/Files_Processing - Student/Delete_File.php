<?php    

$filename = "Quotes_File_New.txt";

//unlink function is used to delete a file -- if the file is deleted it returned TRUE
$status=unlink($filename);    
if($status == TRUE){  
echo "File deleted successfully";    
}else{  
echo "Sorry!, unable to locate or delete file";    
}  
?> 