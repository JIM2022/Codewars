<h1>8-KYU-PHP</h1>

<h4>Fake Binary</h4>
<?php
function fake_bin(string $s): string
{
  $s = str_split($s);
    foreach($s as &$v){
      if( $v < 5){
        $v=0;
      }
      else{
        $v=1;
      }
    }
    $s = implode($s);
  return $s;
 ?>
<h4>Remove exclamation marks</h4>
<?php
function remove_exclamation_marks($string)
{
  return preg_replace('/!/', '', $string);
}
 ?>

<h4>Jenny's secret message</h4>
<?php
function greet($name)
{
    if ($name === 'Johnny')
    {
        return 'Hello, my love!';
    }
    else{
        return "Hello, $name!";
    }
}
 ?>

<h4>Find Maximum and Minimum Values of a List</h4>
<?php
function maximum($array) {
  return max($array);
}
function minimum($array) {
return min($array);
}

 ?>
<h4>Reversing Words in a String</h4>
<?php
function reverse($string)
{
$tab=explode(" ",$string);
$tri=krsort($tab);
   echo implode(" ",$tab);
}
reverse("Hi There.")

 ?>
<h4>Get the mean of an array</h4>
<?php
function get_average($a)
{
$moyenne = array_sum($a)/count($a);
  return floor($moyenne);

}
 ?>

<h4>Convert boolean values to strings 'Yes' or 'No'.</h4>
<?php
function boolToWord($bool){
if($bool == true){
  return 'Yes';
  }
    else{
    return 'No';
    }
}
 ?>

<h4>I love you, a little , a lot, passionately ... not at all*</h4>
<?php
function how_much_i_love_you(int $nb_petals): string {
  $number = ($nb_petals-1) % 6;
  switch($number){
    case 0:
      return "I love you";
    case 1:
      return "a little";
    case 2:
      return "a lot";
    case 3:
      return "passionately";
    case 4:
      return "madly";
    case 5:
      return "not at all";
  }
}
 ?>
<h4>Drink about</h4>
<?php
function people_with_age_drink(int $old): string {
  if ($old <= 13) {
    return "drink toddy";
  } elseif ($old <= 17) {
    return "drink coke";
  } elseif ($old < 21) {
    return "drink beer";
  } else {
    return 'drink whisky';
  }
}
 ?>

<h4>Sum Arrays</h4>
<?php
function sum(array $a): float {
 return array_sum($a);
}
 ?>
<h4>Palindrome Strings</h4>
<?php
function is_palindrome($line)
{
  return $line == strrev($line);
}
 ?>
<h4>Calculate average</h4>
<?php
function find_average($array)
{
return array_sum($array)/count($array);
}
 ?>
<h4>Remove String Spaces</h4>
<?php
function no_space(string $s): string {
  return str_replace(" ","",$s);
}
 ?>
<h4>Even or Odd</h4>
<?php
function even_or_odd(int $n): string
{
  if($n % 2 == 0){
      return "Even";
      }
      else{
        return "Odd";
        }
}
 ?>
<h4>Keep Hydrated!</h4>
<?php
function litres($t)
{
$result = floor($t /2);
  return $result;
}
 ?>
<h4>Volume of a Cuboid</h4>
<?php
$kata = new class
{
  public function get_volume_of_cuboid($length, $width, $height)
  {
    return $length*$width*$height;
  }
};
 ?>
<h4>Parse nice int from char problem*</h4>
<?php
function getAge($response) {
$a = $response;
   switch ($a) {

   case "0 year old":
   return 0;
   case "1 year old":
   return 1;
   case "2 years old":
   return 2;
   case "3 years old":
   return 3;
   case "4 years old":
   return 4;
   case "5 years old":
   return 5;
   case "6 years old":
   return 6;
   case "7 years old":
   return 7;
   case "8 years old":
   return 8;
   case "9 years old":
   return 9;
   }
}
 ?>
<h4>Invert values</h4>
<?php
function invert(array $a): array {
  foreach ($a as &$v){
  $v = $v*(-1);
  }
  return $a;
}
 ?>

<h4>Multiply</h4>
<?php
function multiply($a, $b) {
  return $a * $b;
}
 ?>

<h4>How many lightsabers do you own?*</h4>
<?php
function howManyLightsabersDoYouOwn($name = '') {
    if ($name === 'Zach')
    {
      return 18;
    }
    else
    {
      return 0;
    }
}
 ?>
<h4>Simple Calculator*</h4>
<?php
function calculator($a, $b, $sign)
{
  if( is_string($a) || is_string ($b))
  {
    return "unknown value";
  }
    switch ($sign)
    {
    case '+': return $a+$b;
    case '-': return $a-$b;
    case '/': return $a/$b;
    case '*': return $a*$b;
    default : return 'unknown value';
    }
}
 ?>
<h4>Unfinished Loop - Bug Fixing #1</h4>
<?php
function createArray($number)
{
  $newArray = array();

  for($count = 1; $count <= $number; $count++)
  {
    $newArray[] = $count;
  }
  return $newArray;
}
?>

<h4>Sum of positive*</h4>
<?php
function positive_sum($arr) {

  if (empty($arr)) {
    return 0;
  }
  else {
    $res = 0;
    foreach($arr as $key => $value) {
      if ($value >= 0) {
        $res += $value;
      }
    }
    return $res;
  }
}
?>
<h4>String repeat</h4>
<?php

function repeatStr($n, $str)
{
  return str_repeat($str, $n);
}
 ?>
