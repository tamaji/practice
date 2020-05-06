<?php
function sum($max){
    
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    
    return $result;
}

echo sum(100) . PHP_EOL;

// PHP/Laravel 04 課題
// 課題1
function double($number){
    return $number * 2;
}

echo double(5) . PHP_EOL;

// 課題2
function f($a, $b){
    return $a + $b;
}

echo f(3, 4), PHP_EOL;

// 課題3
$array = [1, 3, 5, 7, 9];

function multi($arr){
    $total = 1;
    
    for($i = 0; $i < count($arr); $i++){
        $total *= $arr[$i];
    }
    
    return $total;
}

echo multi($array), PHP_EOL;

// 課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
        $max_number = $a;
    }
 }

 return $max_number;
 }
 
 $array2 = [3, 8, 10, 5, 2];
 echo max_array($array2), PHP_EOL;
 
// 課題5
// strip_tags
// 文字列からHTMLタグやPHPタグを取り除く
$string = "<p>はじめてのPHP</p><a>リンクはこちら</a>";
echo strip_tags($string, '<p>'), PHP_EOL; // 第2引数に指定したタグは対象外になる

// array_push
// 配列の最後に要素を追加する
$string2 = ['オレンジ', '桃', 'みかん'];
array_push($string2, 'ぶどう', 'バナナ');
print_r($string2);

// array_merge
// 配列同士をマージする
$string3 = array(2, "color" => "red", "みかん");
$string4 = array(5, 6, "color" => "blue", "バナナ");
$string_merge = array_merge($string3, $string4);
print_r($string_merge);

// time
// 現在のUnixタイムスタンプを返す
echo time(), PHP_EOL;

// mktime
// 日付をUnixのタイムスタンプとして取得する
$today_month = 5;
$today_day = 6;
$today_year = 2020;
echo mktime(0, 0, 0, $today_month, $today_day, $today_year), PHP_EOL;

// date
// ローカルの日付/時刻を書式化する
date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d h:i:s"), PHP_EOL;
?>