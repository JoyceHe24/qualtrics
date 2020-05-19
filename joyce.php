<?php 	
  $people = ['f_cond1_good', 'm_cond1_good', 'f_cond1_great', 'm_cond1_great', 'f_cond2_good', 'm_cond2_good', 'f_cond2_great', 'm_cond2_great', 'f_cond3_good', 'm_cond3_good', 'f_cond3_great', 'm_cond3_great', 'f_cond4_good', 'm_cond4_good', 'f_cond4_great', 'm_cond4_great'];
  $scenarios = ['scenario1', 'scenario2', 'scenario3', 'scenario4', 'scenario5', 'scenario6', 'scenario7', 'scenario8', 'scenario9', 'scenario10', 'scenario12', 'scenario13', 'scenario14', 'scenario15', 'scenario16];
  $results = [];

  shuffle($people);
  shuffle($scenarios);

  for ($i = 0; $i < 16; $i++) {
  	array_push($results, $people[$i] . " " . $scenarios[$i]);
  }

   echo json_encode($results);
   
?>