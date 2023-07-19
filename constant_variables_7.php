<?php
  $x=500;
  $x=200;
  echo $x;

  $x="Tanmoy";
  echo $x."<br>";

  define("num",30);
  echo num."<br>";
  /*define("num",10); #It'll not work as 'num' is a constant variable
  echo num;*/

  define("_num",111);
  echo _num."<br>";
  // echo _NUM."<br>"; #It'll not work as case-insensitive: false(by default)
  define("num1",10101,true);
  echo num1."<br>";
  echo NUM1."<br>";

  define("_num23",233223);
  echo _num23."<br>";

  $sum= _num+20;
  echo $sum;
?>
