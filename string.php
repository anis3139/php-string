<?php


//Single and Double string DIFF

/*

$name="Rakib";
echo "my name Is $name\n";
echo 'my name Is $name\n';

echo "\n";
$name=<<<EOD
my
Name 
Is 
Rakib
EOD;
echo $name;

*/




//length print

/* $string="Hello World";
echo $string[-4];
echo "\n";
echo substr($string,2,3); //echo long charrecter
echo "\n";
$lenth=strlen($string);
echo substr($string,$lenth-5);

echo "\n";

echo substr($string,-4,-1);  //sortcut
*/





//reverse
/*
$string="Hello World";

echo strrev($string);
echo "\n";


$length= strlen($string) -1;
for($i=$length; $i>=0; $i--){
    echo $string[$i];
}
echo "\n";


$length2=strlen($string);
for($i=1; $i<=$length2; $i++){
echo $string[$i*-1];
}
*/



//String tocken

$string= "Hello World,Rakib, How are you";

$parts=explode(' ',$string);
print_r($parts);

$original=implode(' ',$parts); //implode=join
print_r($original);














