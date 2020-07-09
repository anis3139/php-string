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

// $string= "Hello World,Rakib, How are you";

// $parts=explode(' ',$string);
// print_r($parts);

// $original=implode(' ',$parts); //implode=join
// print_r($original);


// $parts2=preg_split("/ |,/",$string);
// print_r($parts2);


// $parts3=strtok($string, " ,");
// while($parts3 !== false){
//     echo $parts3."\n";
// $parts3=strtok(" ,");
// }









// search in string

// $string="Hello World How Are You. How";

// //echo strpos($string,'How',13);
// $word="how";
// $offset= stripos($string,$word);

// if($offset!==false){
//     echo "'{$word}' is {$offset} possition in the sentense";
// }else{
    
//     echo "result not found";

// }




//Trim

// $string= " hello \n";
// $string= trim($string, ' \n');//rtrim, ltrim
// echo $string;
// echo "data";


//wordwrap

// $string="lorem ipsum dollqar emmet trap hello world in dhaka to home it may concern dkjfn jisdjfo jnjcsd jdshsjkddoik jadnjs";
// echo wordwrap($string,10,"\n",true);    //<br/> for webpage






//new line brack

// $string="lorem ipsum dollqar emmet trap hello world\n in dhaka to home it may concern\n dkjfn jisdjfo jnjcsd jdshsjkddoik\n jadnjs";
// echo nl2br($string);




//scanf


// $string="Abul Hossain 01816366535 anis904692@gmail.com";

// $parts=sscanf($string, "%s %s %11s %s");
// print_r($parts);


// sscanf($string, "%s %s %11s %s", $fname, $lname, $mobile, $email);
// echo $email;










