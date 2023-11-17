// 1- masala<br><br>
//1dan N gacha bo'lgan sonlarning ko'paytmasini aniqlash<br><br>
<?php
$numbers = [1, 2, 3, 4];
$sum = 1;

for ($i = 0; $i < count($numbers); $i++) {
    $sum = $sum * $numbers[$i];
}

echo $sum;
?><br><br>

// 2- masala<br><br>
// 1dan N gacha bo'lgan sonlardan tashkil topgan massivning 3ga karrali bo'lgan 
indeksidagi elementlarining yig'indisini hisoblash. <br><br>
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = 0;

for ($i = 0; $i < count($numbers); $i = $i + 3) {
    $sum = $sum + $numbers[$i];
}

echo $sum;
?><br><br>

// 3- masala<br><br>
// Quyidagi massivdan eng katta qiymatli massiv elementining indeksini toping.<br><br>
<?php
$student = array(
    "jasur" => 31,
    "eshmat" => 41,
    "toshmat" => 39,
    "anvar" => 40,
    "sardor" => 43,
    "alisher" => 17,
    "dilshod" => 23,
);

$temp = 0;
$temp_index = null;

foreach ($student as $key => $value){
    if ($temp < $value){
        $temp = $value;
        $temp_index = $key;
    }
}
echo $temp;
?><br><br>

// 4- masala<br><br>
// $n = array(12,5,2,66,22,56,123,7,1,67).Ushbu massivni elementlari o'sish tartibida saralang va
<br>hosil bo'lgan yangi massivni ekranga chiqaring. Natija = 1,2,5,7,12,22,56,66,67,123
<br><br>
<?php
$data = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);

for($i = 0; $i < count($data); $i++){
    $main = $data[$i];
    for($j = $i + 1; $j < count($data); $j++){
        if($main > $data[$j]){
            $main = $data[$j];
            $temp = $data[$j];
            $data[$j] = $data[$i];
            $data[$i] = $temp;
        }
    }
}
print_r($data);
?><br><br>