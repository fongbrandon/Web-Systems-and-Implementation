<?php
    $sentence = 'You were a political juggernaut for many, many years.  I admire that.';
    // explode the string in to an array with the delimiter as a space
    $mywords = explode(' ', $sentence);
    // return the total number of the elements (words) in the array
    $numwords = count($mywords);
    // display the results
    echo ("Total Number of Words in the Sentence = $numwords.");
    echo "</br>";

    $vowels = 'aAeEiIoOuU';
    $strCountries = 'Bahamas|Honduras|Mauritius|Canada|Antigua|Belize|Panama|Chile|Barbados|France|Italy|Spain|Mexico|Egypt|Greenland|Russia|China|Japan|Israel|Vietnam|South Korea';
  
    // explode the string into an array using the delimiter of a comma and space
    echo $strCountries;
    echo "</br>";
    // negative limit
    //don't include the last element in the array
    print_r(explode('|', $strCountries, -1));
    echo "</br>";

    print_r(explode('|', $strCountries));

?>
