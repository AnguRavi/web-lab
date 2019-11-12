<?php
$allStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ',$allStates);
$i = 0;
//state ending with xas
foreach($states1 as $state) 
{
  if(preg_match('/xas$/',($state))) 
  {
  $statesArray[$i] = ($state);
  $i = $i + 1;
  echo "The state that end with xas is ".$state."<br>";
  }
 }
 
 //states begining with k and end with s 
 foreach($states1 as $state) 
{
  if(preg_match('/^k.*s$/i',($state))) 
  {
  $statesArray[$i] = ($state);
  $i = $i + 1;
  echo "The state begins with k and ends with s is ".$state."<br>";
  }
 }
 
  //states begiining with M and end with s 
 foreach($states1 as $state) 
{
  if(preg_match('/^M.*s$/',($state))) 
  {
  $statesArray[$i] = ($state);
  $i = $i + 1;
  echo "The state begins with M and ends with s is ".$state."<br>";
  }
 }
 
  //states ending with a
 foreach($states1 as $state) 
{
  if(preg_match('/a$/',($state))) 
  {
  $statesArray[$i] = ($state);
  $i = $i + 1;
  echo "The state begins with a is ".$state."<br>";
  }
 }
 
 foreach($statesArray as $element => $value) 
 {
	 print("\n".$value."is the element".$element);
 }
 ?>
 
 
 
 
 
