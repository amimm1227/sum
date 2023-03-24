<?php
    
    // 課題1

    function sum($max) {

    $result = 1;

    for($i = 1; $i <= $max; $i++){

        $result *= $i;
    }

    return $result;
}

echo sum(100); 
echo "\n";

    //課題2

    function add($a, $b){
        $result = $a + $b;
        return $result;
    }
    
    $sum = add(1,2);
    echo $sum;
    echo "\n";
    
    //課題3
    
    function array_multply($arr){
        
        $result = 1;
        
        foreach ($arr as $value){
            $result *= $value;
        }
        
        return $result;
    }
    
    $arr = array(1, 3, 5, 7, 9);
    $result = array_multply($arr);
    echo $result;
    
    //課題4
    function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
    foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if($a > $max_number){
        $max_number = $a;
    }
    
  }

  return $max_number;
}

echo "\n";
echo max_array($arr);

//課題5

$string = "こん<br>にち<br>は";
$result = strip_tags($string);
echo "\n";
echo $result;

$fruits = array("いちご","メロン","スイカ");
array_push($fruits,"ブドウ","パイナップル");
echo "\n";
echo $fruits[4];

$number1 = [1,2,3];
$number2 = [10,20,30];
$number3 = [100,200,300];

$number = array_merge($number1,$number2,$number3);
echo "\n";
echo $number[5];

$timestamp = mktime(1,04,00,3,25,2023);
echo "\n";
echo $timestamp;

echo "\n";
echo date('Y-m-d');
