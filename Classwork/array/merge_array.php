<?php
$J_Parishes = Array('Hanover', 'Trelawny', 'Portland', 'Manchester');
$S_Parishes = Array('Trelawny', 'Manchester', 'St. James', 'St. Ann');
$D_Parishes = Array('St. Thomas', 'St. Andrew', 'Westmoreland');
$M_Parishes = Array('Hanover', 'St. Catherine');
$Mary_Fave = 'Trelawny';
// combine Arrays in to one

$all_parish = array_merge($J_Parishes, $S_Parishes, $D_Parishes, $M_Parishes);
print_r($all_parish);
echo '<br>';
$unique_parish = array_unique($all_parish);

  // find out if Mary's Parish exists in the new, unique array
  if (in_array($Mary_Fave, $unique_parish))
    echo "Mary's s Favourite Parish is also a favourite of her friends. Yay!";
  else
    echo "Mary's Favourite Parish is not a favourite of her friends.  Awwwww";
?>