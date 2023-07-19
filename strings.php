<?php
  $str = "This is a string";
  echo $str;

  $len= strlen($str);
  echo "<br>The length of this string is ";
  echo $len;

  //String concatenation
  echo "<BR>My name is ".$len." TANMOYDAS";

  //Number of words
  $words= str_word_count($str);
  echo "<BR>".$words;

  //Reverse String
  $reverse= strrev($str);
  echo "<br>".$reverse;

  //Search a word
  $pos= strpos($str, "is");
  echo "<br>"."The position of 'is' in the string is: ";
  echo $pos;

  //Word repalecement

  echo "<br>The replaced string is ".str_replace("is","at",$str);
?>
