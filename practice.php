<?php
echo "hello php!";
echo "\n";

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
