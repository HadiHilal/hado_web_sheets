<?php
/*
-----------------------------------------------
-----------PHP esentials SHEETS CHEAT ---------
-----------------------------------------------

===========
variables
===========
*/
$myvar  = "example";   // string variable
$mynum  = 123;         // number variable
$mynum .= 973;         // this . add concat mean wil print 123973
$double = 3.5;         // doble variable
$boo    = false;       // boolian data type 
$null   = Null ;       // null data type
$__name = 'hadi';

//note : the variable shouldnot be start in numper but can start with under score _

echo $myvar; // printing variable

/*
===========
Comments 
===========
*/
// this is one line comment
#  this one line comment
/* this multi line comments */



/*
===========
Constants  
===========
  we have 2 ways to define constans in php
  1- define(name , value )
  2- const name  = value
   note : why we use define 
   ----
   1- because it will be assigin global 
   2- because it cant re assigned
*/

define('NAME', 'ahmad') ;
const NAME2  = 'SAEED';

// Magic Constants:
__LINE__; # print The current line number of the file.
__FILE__; # print The full path and filename of the file.
__DIR__;  # print The directory of the file.
__FUNCTION__; # print The function name.
__CLASS__; # print The class name.
__TRAIT__; #print The trait name.
__METHOD__; #print The class method name.
__NAMESPACE__; #print The name of the current namespace.

echo PHP_VERSION; // Outputs the PHP version
echo PHP_OS;      // Outputs the operating system PHP is running on

/*
===========
Data Type  
============
*/

$var  = " it is a string"; // [1]-string
$var1 = 5;                 // [2]-int
$var2 = true;              // [3]-boolean
$var3 = 10.3;              // [4]-floating
$var4 = array(1,3,4);      // [5]-array
$var5 = new DateTime();    // [6]-object
$var4 = null;              // [7]-null

echo gettype($var); # this will return data type 

/*
===========
Type Casting 
============
  mean change to data type  

  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "array"
  = "object"
  = "null" or unset
*/
$number = "42";
settype($number, "int");
// Now $number is an integer

$floatNumber = 3.14;
settype($floatNumber, "string");
// Now $floatNumber is a string

$booleanVar = 1;
settype($booleanVar, "bool");
// Now $booleanVar is a boolean

$arrayVar = "hello";
settype($arrayVar, "array");
// Now $arrayVar is an array

$someVar = "value";
settype($someVar, "null");
// Now $someVar is null




/*
===========
Condations  
===========
*/
$condition = 'here is the condition';

if ($condition) {
  # code...
}elseif ($condition) {
  # code...
}else{

}

/*
================
  Operators  
===============
*/

/*
Arithmetic operators
--------------------
  [+]  addition      100 + 20 = 120
  [-]  subtraction   100 - 20 = 80
  [*]  multioliction 100 * 20 = 2000
  [/]  division      100 / 20 = 5
  [%]  moduls        100 % 20 = 0
  [**] exp           10 ** 2  = 100  mean 10 raised to the power of 2

*/

/*
 
 Assignment operators
 --------------------

 $var1   = 200
 $var1  +=100 => thats mean 200 + 100 = 300
 
 $var1   = 200
 $var1  -=100 => thats mean 200 - 100 = 100

 $var1  = 200
 $var1  *=100 => thats mean 200 * 100 = 20000

 $var1  = 200
 $var1  /=100 => thats mean 200 / 100 = 2
  
*/

 /*
 
 Comparison operators
 --------------------

 [==]   Equals            this check if the comparison elements have a same value 
 [!=]   Not equals        this check if the comparison elements dont have a same value
 [<>]   Not equals        this check if the comparison elements dont have a same value
 [===]  Identical         this check if the comparison elements have a same value and same data type
 [!==]  Not Identica      this check if the comparison elements dont have a same value and same data type
 [<]    Less than
 [<=]   Less than or equals
 [>]    Larger than
 [>=]   Larger than or equals
*/

/*
 
 Increament operators
 --------------------

 [++$a] pre-increament
 [$a++] post-increament
  
 [--$a] pre-decreament
 [$a--] post-decreament
  
*/

 /*
 
 Logical operators
 --------------------

 [and] condition 1 and condition 2 and all condition...etc should be true
 [&&]  condition 1 and condition 2 and all condition...etc should be true

 [xor] condition 1 should be true but not not all condition 
 [or]  condition 1 or condition 2 or all condition...etc should be true
 [||]  condition 1 or condition 2 or all condition...etc should be true

 [!]   not 

*/

 /*
 
 Error operator
 --------------------

 [@] we add it before function to dont show the error 

 examples:

 $file = @fopen('test.txt' , "r") or die ('this file is not found')

 (@include('index.php')) or die('no such file');

*/

/*

===========
 for loop
===========
exp1 = intitial counter
exp2 = condition
exp3 = increment

for(exp1 ; exp2 ; exp3){
  // statment 
}

while( Expersion){
  // statment 
}

do{
  // statment 
}while(Expersion )

*/

for($i = 1 ; $i <=20 ; $i++){

  // statment 

}

$a =1 ;

while($a < 20){
  // statment 
}


$i = 1 ;
do{
  echo $i;
  $i++;
}while($i <= 20 );

/*
===========
 foreach
===========

syantx[1] for indexed arrays
foreach($array as $value){
  code here 
}

syantx[2] for Associative arrays
foreach($array as $ke => $value){
  code here 
}
*/



/*
===========
 functions
===========

function name ($arg1 , $arg2 ....){
  
  // body function here
}
*/

function  sayHello($name){

    echo 'hello' . $name;
}

sayHello('hadi');

//output:
//hello hadi




/*

switch(Experssion){
  
  case :
  //code here 
  break

  default:
  //code here 
  break
}

 */