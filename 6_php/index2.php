<?php
$foods = array("kimuchi","chanja","bossam","choppal");
print_r($foods);
echo "<br>";
echo $foods[0];
echo "<br>";
echo end($foods);
echo "<br>";
array_pop($foods);
array_push($foods,"rie");
print_r($foods);
echo "<br>";


//$foods = array("kimuchi","chanja","bossam","choppal");
//for ($x=3;$x<4;$x--){
  
//}



$cities = array("Japan"=>"Tokyo","China"=>"Beijing","South Koria"=>"Seoul");
print_r($cities);
echo "<br>";
echo end($cities);
echo "<br>";
echo count($cities);
echo "<br>";
$cities["Thailand"] = "Bangkok";
print_r($cities);
echo "<br>";
$reversed = array_reverse($foods);
print_r($reversed);
echo "<br>";
//array_push()


$food = array("kimuchi","chanja" , "bossam","choppal" );

for ($x = 4; $x >= 0 ; $x--) {

    echo .$food[$x]."<br>";
}

//for($x=3; $x >= 0; $x++) {
    // array_push($foods) = $foods[$x];
////}

//print_r($output);

//echo "<br>";



for ($x=3; $x <=10; $x++){
  echo "the numnber is :$x<br>";
}

echo "<br>";
$add_numbers = [1,3,5,7,9];
 for ($z = 0; $z < count($add_numbers); $z++){
   $add_number = $add_numbers[$z];
   echo $add_number;
   $add_numbers[0];
 }
 echo "<br>";

$names = ["draemon","konan","sazae","kogoro"];
  for ($a = 0; $a < count($names);$a++){
    echo $names[$a] . " ";
  }
  echo "<br>";
$animals = ["cat","lion","giraffe","horse"];
  for ($y = 0; $y < count($animals);$y++){
    echo $animals[$y]. " ";
  }
  echo "<br>";
$numbers = [2,4,6,8,10];
  for ($s = 0; $s < count($numbers);$s++){
    echo $numbers[$s] * 2 . " ";
  }
  
  echo "<br>";

  $counter = 0;
  while ($counter < 10){
    $counter++;
    echo "executing - counter is $counter <br>";
  }

$c = 1;
while ($c <= 5){
  $counter++;
  echo "the number is: $c <br>";
  $c++;
}

$l = 0;
$names = ["draemon","konan","sazae","kogoro"];
while ( $l < count($names) ){
  //$counter++;
  //echo "the name is: $names  <br>";
  echo $names;
  $names++;
}
//forで一個ずつ回す。頭から取り出す＞新しい配列を作って＞新しい配列に入れていく。
//頭から突っ込んでいく。例１＝キムチ＞チャンジャ。。。。頭から突っ込んでいくと自然に
//後ろのやつが前にくる。
?>