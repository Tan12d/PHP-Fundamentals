<?php
   $a= (true and true);
   $a4= (true and false);
   $a5= (false && false);
   echo var_dump($a);
   echo "<br>";
   echo var_dump($a4);
   echo "<br>";
   echo var_dump($a5);
   echo "<br>";

   $a1= (true or false);
   echo var_dump($a1);
   echo "<br>";

   $a2= (false xor false);
   echo var_dump($a2);
   echo "<br>";

   $a3= !(true);
   echo var_dump($a3);
   echo "<br>";
?>
