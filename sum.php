<?php
//課題1
function double($i){
    return $i*2;
}
echo double(20);
echo "\n";
//課題2
function add($a, $b) {
    return $a + $b;
}
echo add(1,2);
echo "\n";
//　課題3
function multiply($arr){
   $result=1;
   foreach($arr as $a){
$result*=$a;
}
 return $result;
}
echo multiply ([1, 3, 5 ,7, 9]); 
echo "\n";
// 課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
    if($max_number<$a){
        $max_number=$a;
     }elseif($max_number>$a) {
        $max_number;
     }
    }
    return $max_number;
 }
 echo max_array([1,3,5,7,9]);
 echo "\n";
// 課題5
$test = '<p>Test.</p><aaaaaaaa> <a href="#">kadai</a>';
echo strip_tags($test);
echo "\n";
echo strip_tags($test, '<p><a>');
 echo "\n";
$kadai2 = array("orange", "banana");
array_push($kadai2, "apple", "raspberry");
print_r($kadai2);
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
 print_r($array);
$time = mktime(10, 10, 10);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
 print(date('Y年m月d日'));
