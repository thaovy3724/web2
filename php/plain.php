<?php
// $num = 10;
// echo "what is her age?\n she is $num years old";

// $op2 = "blahblah";
// function foo($op1){
//     echo $op1;
//     echo $op2;
// }
// foo(42);
// function foo($msg){
//     echo "$msg";
// }
// $var1 = "foo";
// $var1("will this work");

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// print_r (each($people)); // Returns the key and value of the current element (now Joe), and moves the internal pointer forward

// echo stripos("i love php","PHP");

// function one($string){
//     echo "i am".$String;
// }

// function email(){
//     $email = 'user@yahoo.com';
//     $new = strstr($email, '@');
//     echo $new;
// }
// email();

// $a = 1;
// if(print $a) print"true";
// else print"false";

// $b = false;
// if($b=true) print("true");
// else print("false");

// function b($a=4){
//     $a=$a/2;
//     return $a;
// }
// $a = 10;
// echo b($a);

// $a = "hi,world";
// $b = array_map("strtoupper", explode(",",$a));
// foreach($b as $value)
//     print "$value";

// if(preg_match("/[^a-z589]+/","ABasdfg589nmGH",$array)){
//     print_r($array[0]);
// }

session_start();
if(!array_key_exists('counter',$_SESSION))
    $_SESSION['counter'] = 0;
else $_SESSION['counter']++;
session_regenerate_id();
echo $_SESSION['counter'];
?>