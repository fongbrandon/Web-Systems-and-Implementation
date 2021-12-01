<?php

    //https://www.youtube.com/watch?v=KYdGbqAVh5w&t=50s
    //files: 
	// 1. create or open a file				r, w, a, r+, w+,a+
	// 2. read, write or append to file
	//3. close the file

	//make a file handle ... Create a file
	
	$handle = fopen("Quotes_File_New.txt", "r");
	
	readfile("Quotes_File_New.txt");
	
	echo "</br> </br><h3>Using while loop to display file content</h3></br></br>";
	//while it is not the end of a file, 
	while(!feof($handle))
	{
		echo fgets($handle)."<br/>";
	}

    echo "</br> </br><h3>Using fread</h3></br></br>";
    //place pointer at the beginning of the file
    rewind($handle);  //fseek($handle,0);

    //Display first 50 characters from the first position
    $textresult = fread($handle, 50);
    echo $textresult;


    rewind($handle);  //fseek($handle,0);
    $result = fgets($handle, "Listen");
    echo $result;


    
?>