
<?php
//echo "hello";
$x = "这是数字";
echo $x."<br>";

$y = 888;
echo $y."<br>";

$z = true;
echo $z."<br>";

$a = [3,9,11];
array_push($a,15);
print_r($a);

unset($a[0]);
echo $a."<br>";

$b = "hello world";
echo $b[0]."<br>";

echo $b[strlen($b)-1]."<br>";
$c = ucfirst($b);
echo $c."<br>";

echo $b."rie"."<br>";

$d = 300;
$e = 200;
$f = $d + $e;
echo $f."<br>";
$f = $d * $e;
echo $f."<br>";

$g = ["name1"=>"jen","name2"=>"beb"];
echo $g["name1"]."<br>";

$h = ["steph"=>18,"john"=>20,"maria"=>15];
echo $h["john"]."<br>";

$i = "alex";
$j = "jesica";
$phone_numbers =[$i=>"123-456",$j=>"789-765"];
echo $phone_numbers[$j]."<br>";

$phone_numbers = [
  "alex"=>"123-456",
  "jesica"=>"789-765"
];
if (array_key_exists("alex",$phone_numbers)){
  echo "alex's phone number is ".$phone_numbers["alex"]."<br>";
}

//--------------------practice
//$name = "kokoko";
//echo = "good mornig,{name}";

//for ($i = 1; $1 <= 100; $1 ++){
  //echo $i;
//}


//$1 = 1;
//while ($1 <= 100){
  //echo $i;
  //$i ++;
//}

//function hello(){
  //echo "hello,world!";
//}

//function getSum($num1,$num2){
  //return $num1 + $num2;
//}
//<form action="url" method= "post">
//<form action="sent.php" method="post">
//<input type="text" name="email" value"">
//<input type="submit" value="送信">
//<textarea name="content"></textarea>
//</form>

//$x = 1;
//$y = "foo";
//$z = true;


//$x = 1;
//$y = 2;
//$sum = $x + $y;
//echo $sum;$x = 1;
//$x = 10;
//$y = 5;
//$diff = $x - $y;
//echo $diff;

//$x = 3;
//$y = 5;
//$z = $x * $y;
//echo $z;

//$x = 20;
//$y = 4;
//$z = $x / $y;
//echo $z;


//$a = 5;
//$b = 2;
//$sum = $a + $b;
//$result = $a + $b;
//echo "<br>".$result;

//$first_name = "john";
//$last_name = "doe";
//$name = $first_name . " " . $last_name;
//echo $name;

//word = "hello world";
//echo strtoupper($word);

//$word = "HELLO WORLD";
//echo strtolower($word);

//$odd_numbers = [1,3,5,7,9];
//$first_odd_number = $odd_numbers[0];
//$second_odd_number = $odd_numbers[1];

//echo "The first odd number is" .$first_odd_number. "<br>";
//echo "The second odd number is" .$second_odd_number. "<br>";
?>