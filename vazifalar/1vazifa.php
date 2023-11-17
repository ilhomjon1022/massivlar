// 1-masala. 1 dan N ga bolgan sonlardan tashkil topgan massiv hosil qiling<br>

<?php
$n = 15;
$sonlar = [];
for ($i = 0; $i <= $n; $i++) {
    $sonlar[] = $i;
}
var_dump($sonlar);
?><br><br>

// 2-masala. 1 dan N gacha bolgan sonlardan tashkil topgan massivning
elementlarini yigindisini hisoblang.<br>

<?php
$a = array(5, 15, 25);
echo array_sum($a);
?><br><br>

// 3-masala. 1 dan N gacha bolgan sonlardan tashkil topgan massivning
elementlarini kopaytmasini hisoblang.<br>

<?php
$a = array(5, 5);
echo (array_product($a));
?><br><br>

// 4-masala. 1 dan N gacha bolgan sonlardan tashkil topgan massivning
toq indeks dagi elementlari yigindisini hisoblang. <br>

<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$sum = 0;
foreach ($numbers as $index => $number) {
    // print_r('index: ' . $index .' | ' . '$number: ' . $number);
    // echo '<br>';
    if ($index % 2 != 0) {
        $sum += $number;
    }
}

echo "Elementlar yig'indisi: " . $sum;


?><br><br>

// 5-masala. 1 dan N gacha bolgan sonlardan tashkil topgan massivning
3 ga karrali bolgan indeksdagi elementlarini yigindisini hisoblang. <br>

<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = 0;

for ($i = 0; $i < count($numbers); $i = $i + 3) {
    $sum = $sum + $numbers[$i];
}

echo $sum;

?><br><br>

// 6-masala. 1 dan N gacha bolgan sonlardan tashkil topgan massivning
4 ga karrali bolgan elementlarini yigindisini hisoblang. <br>

<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = 0;

foreach ($numbers as $number) {
    if ($number % 4 == 0) {
        $sum += $number;
    }
}

echo $sum;

?><br><br>

// 7-masala. 1 dan N gacha bolgan sonlardan tashkil topgan massivning
elementlari ichidan, faqat juft sonlarni yigindisini hisoblang. <br>

<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
$sum = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sum += $number;
    }
}

echo "Juft sonlar yig'indisi: " . $sum;

?><br><br>

// 8-masala. N ta sondan tashkil topgan array yarating.
Shu arrayni ichida M soni bor yoqligini aniqlang.
Misol: $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67) ;
$m=22; Natija : 22 soni massiv ichida bor. <br>

<?php
$numbers = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);

if (in_array(22, $numbers)) {
    echo "22 soni massiv ichida mavjud";
} else {
    echo "22 soni massiv ichida mavjud emas";
}

?><br><br>

// 9-masala. N ta sondan tashkil topgan massivning 2- va 5 - indeksdagi
elementlarini almashtiring va hosil bolgan massivni ekranga chiqaring.<br>

<?php
$a1 = array("red", "green", "blue", "yellow", "brown", "gold");
$a2 = array(2 => "orange", 5 => "burgundy");
print_r(array_replace($a1, $a2));

?><br><br>