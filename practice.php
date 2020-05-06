<?php
echo "hello php!";
echo "\n";


//PHP/Laravel 02 課題
// 課題１
$a = 3;
$b = 7;

echo $a + $b;
echo "\n";

// 課題2
$array_month = ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'];

echo $array_month[7];
echo "\n";

// 課題3
$hello = "Hello, ";
$name = "Masahiro";
$world = "'s World!";

echo $hello . $name . $world;
echo "\n";

// 課題4
$tech_boost = "tech ";
$tech_boost .= "boost";

echo $tech_boost;
echo "\n";

// 課題5
$calendar_2018 = [  // 2018_calendarは数字から変数名を使用している
  "January" => "1月",
  "February" => "2月", // 区切りが「,」ではなく「、」を使用している
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",  // =>が=になっている
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",  // 10月を「"」で囲んでいない
  "November" => "11月",
  "December" => "12月"
]; // []で囲むところを{}で囲んでいる

// 12月を表示する
echo $calendar_2018["December"]; // Decemberを「"」で囲んでいない
echo "\n";



// PHP/Laravel 03 課題
// 課題1
$name = "Masahiro";

if($name === "Masahiro"){
    echo "「わたしは" . $name . "です」";
} else {
    echo "「あなたの名前ではありません」";
}

echo "\n";

// 課題2
$total = 0;

for($i = 1; $i <= 10000; $i++){
    $total += $i;
}

echo $total;
echo "\n";

// 課題3
$fruits = ["バナナ", "桃", "いちご", "ライチ", "メロン"];

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

// 課題4
/* for文の始めの値を定義する */ // コメントアウトの最後の*が記述していない
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){ // 終了条件の演算子が「<=」になっていない

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i; // 「;」が記述されていない
    echo "\n";  // 改行がされていない
  }
}