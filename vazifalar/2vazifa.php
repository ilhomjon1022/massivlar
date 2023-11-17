//0-masala. $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67).
Ushbu massivni elementlari osish tartibda saralang va hosil bolgan yangi
massivni ekranga chiqaring.
Natija : 1, 2, 5, 7, 12, 22, 56, 66, 67, 123<br><br>

<?php
$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
sort($n);
print_r($n);
?><br><br>

//1-masala. $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67).
Ushbu massivni elementlari kamayish tartibda saralang va hosil bolgan yangi
massivni ekranga chiqaring.
Natija : 123, 67, 66, 56, 22, 12, 7, 5, 2, 1<br><br>

<?php
$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
rsort($n);
print_r($n);
?><br><br>

//2-masala. Ushbu arrayni qollagan holda quyidagi matnni ekranga chiqaring.
$web = array('Yii2', 'PHP', 'MySQL', 'jQuery', 'Postgre SQL');
Progress - Zamonaviy kasblar akademiyasida BACKEND DASTURLASH kursiga
START beriladi.
Veb dasturlash (Backend) | PHP, jQuery, MySQL, Postgre SQL, Yii2 va hk<br><br>

<?php
$web = array('Yii2', 'PHP', 'MySQL', 'jQuery', 'Postgre SQL');

echo "Progress - Zamonaviy kasblar akademiyasida BACKEND DASTURLASH kursiga START beriladi.";

echo "<br>";

echo "Veb dasturlash (Backend) | " . implode(", ", $web) . " so'zini ekranga chiqardik";
?><br><br>

//3-masala.
array(0 => 'blue', 1 => 'red', 2 => 'green string', 3 => 'red');<br>
Yuqoridagi arraydan berilgan sozni bor yoqligini aniqlang.<br>
$suz = 'lue'; // Natija : bor<br>
$suz = 'leu'; // Natija : yo'q<br><br>

<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green string', 3 => 'red');
if (in_array("leu", $array)) {
    echo "leu so'zi yoq";
} else {
    echo "lue so'zi bor";
}
echo "<br>";
if (in_array("lue", $array)) {
    echo "lue so'zi bor";
} else {
    echo "leu so'zi yoq";
}

?><br><br>

//4-masala. N butun son berilgan. 2 sonining dastlabki N ta darajasidan tashkil topgan massiv hosil qiling va ekranga chiqaring.<br><br>

<?php
$N = 5; 

$arr = [];
for ($i = 1; $i <= $N; $i++) {
    $arr[] = pow(2, $i);
}

foreach ($arr as $value) {
    echo $value . " ";
}
?><br><br>

//5-masala. N ta elementdan tashkil topgan massiv va K butun son berilgan. <br>
(1<=K<=N, yani K - 1 va N orasida yotuvchi butun son). <br>
Massiv elementlari orasidan, indeksi K ga  karralilarini ekranga chiqaring.<br> 
Shart operatorlari ishlatilmasin.<br><br>

<?php
$massiv = [10, 20, 30, 40, 50, 60, 70, 20, 50, 80,];
$K = 3;

for ($i = 0; $i < count($massiv); $i += $K) {
    echo $massiv[$i] . " ";
}

?><br><br>

//6-masala. N ta elementdan tashkil topgan massiv berilgan.<br> 
Dastlab massiv elementlari orasidan, juft indekslilarini ekranga chiqaring,<br> 
keyin toq indekslilarini ekranga chiqaring. Shart operatorini ishlatmasdan.<br><br>

<?php
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($numbers); $i += 2) {
    echo $numbers[$i] . " ";
}
echo "<br>";
echo "\n";

for ($i = 1; $i < count($numbers); $i += 2) {
    echo $numbers[$i] . " ";
}

?><br><br>

// 7-masala. N ta elementdan tashkil topgan massiv berilgan va K butun son berilgan. Massiv elementlari<br> orasida K ga eng yaqin elementini toping. 
|a[i]-K| ayirma eng kichik boluvchi a[i] topilsin.<br><br>

<?php
$massiv = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
$K = 55;

$asosiyfarq = PHP_INT_MAX;
$eng_yaqinElement = null;

foreach ($massiv as $element) {
    $farq = abs($element - $K);
    if ($farq < $asosiyfarq) {
        $asosiyfarq = $farq;
        $eng_yaqinElement = $element;
    }
}

echo $eng_yaqinElement;


?><br><br>

// 8-masala. N ta elementdan tashkil topgan massiv berilgan. <br>
Massiv elementlari orasida aniq 2 ta bir xil  qiymatli element bor.<br> 
Birinchi topilgan bir xil qiymatli elementlar indeksini chiqaring.<br><br>

<?php
$arrr = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 50, 70);
$key = array_keys($arrr, 50);
print_r($key);
?><br><br>

// 9-masala. ”2019-12-03 12:35:43” - Ushbu matnni quyidagi korinishda yozing: <br>
“3-dekabr, 2019-yil, soat 12 dan 35 daqiqayu, 43 soniya otdi”<br><br>

<?php
$dateTime = "2019-12-03 12:35:43";

$date = date_create_from_format("Y-m-d H:i:s", $dateTime);

// $day = date_format($date, "j");
// $month = date_format($date, "n");
// $year = date_format($date, "Y");
// $hour = date_format($date, "G");
// $minute = date_format($date, "i");
// $second = date_format($date, "s");

$year = date_format($date, "Y");
$month = date_format($date, "n");
$day = date_format($date, "j");
$hour = date_format($date, "G");
$minute = date_format($date, "i");
$second = date_format($date, "s");

echo $day . "-dekabr, " . $year . "-yil, soat " . $hour . " dan " . $minute . " daqiqayu, " . $second . " soniya o'tdi";
?><br><br>
