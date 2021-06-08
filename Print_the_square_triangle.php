<?php
for ($i=1;$i<=5;$i++){
    for ($j=1;$j<=$i;$j++){
        echo '*';
       }
       echo '<br>';
   }
   echo '<br>';
   echo '<br>';
   for ($i=5;$i>=1;$i--){
    for ($j=1;$j<=$i;$j++){
        echo '*';
       }
       echo '<br>';
   }
   echo '<br>';
   echo '<br>';
   for ($i = 1; $i <=5 ; $i++) {
    for ($j = 5 ; $j >= $i ; $j--){
        echo '&#160&#160';
       }
       for ($j = 1; $j <= $i ; $j++) {
        echo '*';
       }
       echo '<br>';
   }
   echo '<br>';
   echo '<br>';
   for ($i = 1; $i <=5 ; $i++) {
    for ($j = 1 ; $j <= $i ; $j++){
        echo '&#160&#160';
       }
       for ($j = 5; $j >= $i ; $j--) {
        echo '*';
       }
       echo '<br>';

   }