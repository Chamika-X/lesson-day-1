<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Web Page</title>
    
    
</head>


<body>
<h1>HELLO World</h1>


<?php
echo "Welcome to Php\n";

// This is a comment
# This is also comment
/* This
is 
a 
multi 
line 
comment*/

echo "Variables\n";
/* x+2=3
x=3-3
x=1
*/

$x=1;
echo "$x\n";
$x = 3;
echo "$x\n";
$x = $x+10;
echo "$x\n";

$x = 2.34;
$y="World";
$z="Hello";

echo $z."  ".$y."  ".$x;
echo "$z $y $x";

function example(){
    Echo"hello world";

}
example();

function example2 ($fnum,$snum){
    echo $fnum+$snum;

}
example2(2,3);


$xy =2000;
$yz =1500;
function test(){
    global $xy,$yz;
    echo $xy + $yz;
}
test();

// arrays

$fruits = array("apple","orange","grapes","mango");
// first element [0]

var_dump($fruits);

echo $fruits[1];



?>  
</body>
</html>