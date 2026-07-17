<?php

/* array */


$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
 


$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Mango");
var_dump($fruits);

$fruits+=["Grapes"=> "Pineapple"];
var_dump($fruits);
 


$fruitss = array("Apple", "Banana", "Cherry");
$new_fruit = "Orange";
array_splice($fruitss, 1, 0, $new_fruit); // insert "Orange" at index 1
var_dump($fruitss);
array_pop($fruitss); // remove the last element
var_dump($fruitss);
unset($fruitss[2]); // remove the first element
var_dump($fruitss);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
print_r($numbers);
sort($numbers);
print_r($numbers);
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);
arsort($age);
print_r($age);
ksort($age);
print_r($age);
krsort($age);
print_r($age);


function test_odd($var)
  {
  return($var & 1);
  }

function test_even($var)
  {
  return(!($var & 1));
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
print_r(array_filter($a1,"test_even"));



$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
echo array_shift($a);
print_r ($a);

/* string */

echo str_word_count("Hello world hello");
$txt = "I really love PHP!";
var_dump(str_contains($txt, "love"));/* true */
var_dump(str_contains($txt, "i"));/* false most be uppercase */

echo strpos("Hello world!", "world");/* index of "world" */

$txt = "I really love PHP!";

var_dump(str_starts_with($txt, "I really"));/* true */
var_dump(str_starts_with($txt, "PHP"));/* false */
var_dump(str_ends_with($txt, "PHP!"));/* true */

$x = "hello world!";
echo strtoupper($x);
echo "\n";
echo strtolower($x);



/* numbers */

$x = 5985;
var_dump(is_int($x));/* true */

$y = 59.85;
var_dump(is_int($y));/* false */

var_dump(is_float($y));/* true */

echo(round(3.60));
echo "\n";
echo(round(3.40));
echo(rand());
echo "\n";
echo(rand(10, 100));
echo "\n";
echo(sqrt(64));
echo "\n";
echo(round(abs(-6.7)));
echo "\n";
echo(round(abs(-6.4)));
?>