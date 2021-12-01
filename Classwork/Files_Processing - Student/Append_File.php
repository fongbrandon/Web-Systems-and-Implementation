<?php  

$filename = "Quotes_File_New.txt";

$handle = fopen($filename, "a");//opens file in append mode  

$text = "\n9. One who has unreliable friends soon comes to ruin, but there is a friend who sticks closer than a brother. ";

if(fwrite($handle, $text) == TRUE)
{
    echo "File appended successfully to ".$filename;
}else{
    echo "Cannot write to file ". $filename;
    exit;
} 
fclose($handle);  
  

?>  