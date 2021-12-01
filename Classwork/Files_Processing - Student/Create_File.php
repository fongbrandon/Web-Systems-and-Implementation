<?php

	//files: 
	// 1. create or open a file				r, w, a, r+, w+,a+
	// 2. read, write or append to file
	//3. close the file

	//make a file handle ... Create a file
    $filename = "Quotes_File_New.txt";
	$handle = fopen($filename, "w+");
	
	$friendquotes = "FRIENDSHIP QUOTES\n\n1. Friendship... is not something you learn in school.\n
    2. But if you haven't learned the meaning of friendship, you really haven't learned anything.\n
    3. One of the most beautiful qualities of true friendship is to understand and to be understood.\n
    4. False friendship, like the ivy, decays and ruins the walls it embraces; but true friendship gives new life and animation to the object it supports.\n
    5. Listen to advice and accept discipline, and at the end you will be counted among the wise.\n
    6. Do to others as you would have them do to you.\n
    7. Two people are better off than one, for they can help each other succeed.\n
    8. A person standing alone can be attacked and defeated, but two can stand back-to-back and conquer.Three are even better, for a triple-braided cord is not easily broken.\n";
	
	if(fwrite($handle, $friendquotes) == TRUE)
    {
        echo "Success, wrote to file ".$filename;
    }else{
        echo "Cannot write to file ". $filename;
        exit;
    }
    
		
	fclose($handle);
	    
?>