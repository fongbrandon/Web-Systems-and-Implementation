<?php
  $sentence = 'You were a political juggernaut for many, many years.  I admire that.';
  // explode the string in to an array with the delimiter as a space
  $mywords = explode(' ', $sentence);
  // return the total number of the elements (words) in the array
  $numwords = count($mywords);
  // display the results
  echo 'Total Number of Words in the Sentence = '.$numwords. '.';
?>
