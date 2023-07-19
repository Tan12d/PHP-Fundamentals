<?php
  $lang= array("Java","Python","C++","Javascript","NodeJS");

  //While Loop

  $a=0;
  while ($a <= 10)
  {
      echo "<br>The value of a is: ";
      echo $a;
      $a++;
  }

  $i=0;
  echo "<br><br>Array elements of lang array:";

  while($i<count($lang))
  {
      echo "<br>";
      echo $lang[$i];
      $i++;
  }

  //Do...while Loop

  $b=0;
  echo "<br><br>Array elements of lang array:";

  do
  {
    echo "<br>";
    echo $lang[$b];
    $b++;
  } while ($b < count($lang));

  // For Loop

  echo "<br>";

  for ($i=0; $i <= 20; $i++)
  {
      echo "<br>";
      echo $i;
  }

  //ForEach Loop

  echo "<br>";

  foreach ($lang as $value)
  {
      echo "<br>The value is ";
      echo $value;
  }


?>
