// 1-masala. ”2019-12-03” formatini ozgartiradigan convertor qiling.<br>
Html select yoki radio dan foydalanib.<br>
Quyidagi formatlarga ogira olsin.<br>
-3-dekabr, 2019 yil<br>
-3/12/2019<br>
-dekabr 3, 2019<br>
-03.12.2019<br>
-2019/03/12<br>
-20190312<br>
-3-dekabr.<br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>”2019-12-03” formatini ozgartiradigan convertor.</p>
    <select>
        <?php
        $date = "2025-12-05";
        $formatdate = array(
            "j/F, Y",
            "d/m/Y",
            "F j, Y",
            "d.m.Y",
            "Y/m/d",
            "Ymd",
            "jF",
        );
        $newFormat = null;
        foreach ($formatdate as $key => $value) {
            $newFormat = date($value, strtotime($date));

            echo '<option>' . $newFormat . '</option>';
        }

        ?>
    </select>
    <?php

    ?><br><br>

</body>

</html>


// 2-masala Textareaga kiritilgan kirilchadagi matnni lotinchaga va aksincha,<br>
lotinchada kirilchaga ogirsin.<br><br>

<!DOCTYPE html>
<html>
<head>
    <title>Kirill-Lotin-Kirill</title>
</head>
<body>
    <form method="POST" action="">
        <textarea name="text" rows="5" cols="30"></textarea><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];

        $kirillToLotin = strtr($text, [
            "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "j", "з" => "z", "и" => "i",
            "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
            "у" => "u", "ф" => "f", "х" => "x", "ҳ" => "h", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ъ" => "", "ы" => "y", "ь" => "",
            "э" => "e", "ю" => "yu", "я" => "ya", "қ" => "q", "ғ" => "g'", "ӯ" => "u'", "ӣ" => "i'", "ҳ" => "h", "ў" => "o'"
        ]);

        $lotinToKirill = strtr($text, [
            "a" => "а", "b" => "б", "v" => "в", "g" => "г", "d" => "д", "e" => "е", "yo" => "ё", "j" => "ж", "z" => "з", "i" => "и",
            "y" => "й", "k" => "к", "l" => "л", "m" => "м", "n" => "н", "o" => "о", "p" => "п", "r" => "р", "s" => "с", "t" => "т",
            "u" => "у", "f" => "ф", "x" => "х", "h" => "ҳ", "ch" => "ч", "sh" => "ш", "yo" => "ё", "yu" => "ю", "ya" => "я", "q" => "қ",
            "g'" => "ғ", "u'" => "ӯ", "i'" => "ӣ", "h" => "ҳ", "o'" => "ў"
        ]);

        echo "<h3>Kirill to Lotin:</h3>";
        echo $kirillToLotin . "<br>";

        echo "<h3>Lotin to Kirill:</h3>";
        echo $lotinToKirill . "<br>";
    }
    ?>
</body>
</html>
<?php
$lotin = array(
    "А", "Б", "В", "Г", "Д", "Е", "Ё", "Ж", "З",
    "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С",
    "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Э", "Ю", "Я",
    "а", "б", "в", "г", "д", "е", "ё", "ж", "з",
    "и", "й", "к", "л", "м", "н", "о", "п", "р", "с",
    "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "э", "ю", "я"
);

$cyrillic = array(
    "A", "B", "V", "G", "D", "E", "YO", "ZH", "Z",
    "I", "Y", "K", "L", "M", "N", "O", "P", "R", "S",
    "T", "U", "F", "X", "TS", "CH", "SH", "SHCH", "E", "YU", "YA",
    "a", "b", "v", "g", "d", "e", "yo", "zh", "z",
    "i", "y", "k", "l", "m", "n", "o", "p", "r", "s",
    "t", "u", "f", "x", "ts", "ch", "sh", "shch", "e", "yu", "ya"
);

$text = "Natija: Bu matn lotindagi harflarga aylangan matn";
$converted = str_replace($lotin, $cyrillic, $text);

echo $converted;
?><br><br>


// 3-masala. N ta elementdan tashkil topgan massiv berilgan. Massivda eng kop<br>
qatnashgan bir xil qiymatli element sonini chiqaruvchi funksiya yozing.<br><br>

<?php
$array = array(10, 20, 30, 40, 50, 60, 70, 80, 70, 50, 70, 40, 70);
$new = array_filter(array_count_values($array), 'custom_filter');
function custom_filter($val)
{
    return $val > 1;
}
print_r($new);
?><br><br>

// 4-masala. N ta elementdan tashkil topgan massiv berilgan. Massiv elementlari<br>
orasidan 2 martadan kop uchraganlarini o'chiruvchi funksiya yozing.<br>
Hosil bolgan massiv elementlari soni va elementlari chiqarilsin.<br><br>

<?php
function removeDuplicates($array)
{
    $countArr = array_count_values($array);
    $newArray = array();

    foreach ($array as $value) {
        if ($countArr[$value] < 2) {
            $newArray[] = $value;
        }
    }

    return $newArray;
}

$givenArray = array('a', 'b', 'a', 'c', 'd', 'e', 'b', 'f', 'c', 'c');

$uniqueArray = removeDuplicates($givenArray);

echo "Hosil bo'lgan massiv elementlari soni: " . count($uniqueArray) . "<br>";
echo "Hosil bo'lgan massiv elementlari: ";

foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?><br><br>

// 5-masala. Bubble sort yordamida massivni osib borish tartiribda saralang.<br>
Algoritm: Har bir element ozidan keyin turgan elementlar bilan solishtiriladi.<br>
Agar ozidan keyin turgan element undan kichik bolsa ularni qiymati almashadi.<br><br>

<?php
function bubble_sort($arr)
{
    $size = count($arr) - 1;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            $k = $j + 1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$arr = array(1, 3, 2, 8, 5, 7, 4, 0);
print("Tartiblashdan oldin \n");
print_r($arr);
echo "<br>";
$arr = bubble_sort($arr);
print("Tartiblashdan keyin \n");
print_r($arr);
?><br><br>


// 6-masala. Selection sort yordamida massivni osib borish tartiribda saralang.<br>
Algoritm: Har bir element o`zidan keyin turgan elementlarning eng kichigi <br>
bilan almashtiriladi.<br><br>

<?php
function selectionSort(array $a): array
{
    for ($i = 0; $i < count($a) - 1; $i++) {
        $min_i = $i;
        for ($j = $i + 1; $j < count($a); $j++) {
            if ($a[$j] < $a[$min_i]) {
                $min_i = $j;
            }
        }
        if ($i != $min_i) {
            $temp = $a[$i];
            $a[$i] = $a[$min_i];
            $a[$min_i] = $temp;
        }
    }
    return $a;
}

$arr = array(1, 3, 2, 8, 5, 7, 4, 0);
print("Tartiblashdan oldin \n");
print_r($arr);
echo "<br>";
$arr = selectionSort($arr);
print("Tartiblashdan keyin \n");
print_r($arr);

?><br><br>