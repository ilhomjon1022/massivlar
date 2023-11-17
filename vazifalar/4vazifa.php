// 1-masala.1. M x N o`lchamda, random sonlar yordamida massiv hosil qiling va ekranga jadval <br> ko'rinishida chiqaring.<br>
rand($min, $max)-random sonlarni hosil qilish uchun ushbu funksiyadan foydalaning.<br>
https://www.php.net/manual/en/function.rand.php.<br><br>

<?php
$M = 5;
$N = 5;

$massiv = [];
for ($i = 0; $i < $M; $i++) {
    $row = [];
    for ($j = 0; $j < $N; $j++) {
        $row[] = rand(1, 100); 
    }
    $massiv[] = $row;
}

echo "<table border='1'>";
for ($i = 0; $i < $M; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $N; $j++) {
        echo "<td>" . $massiv[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?><br><br>

// 2-masala M x N o'lchamda massiv berilgan. (rand(1,100); funksiyasi yordamida hosil qiling).<br>
Massivning har bir SATR elementlari yig`indisi topilsin va massiv elementlari bilan ekranga chiqarilsin.<br>

1 4 5 6 7 - bu satrning yig`indisi: 23<br>
3 34 12 12 1 - bu satrning yig`indisi: 62<br>
6 41 23 3 12 ...<br>
23 2 32 55 65 <br><br>

<?php
$M = 4; 
$N = 5; 

$matrix = array();

for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $matrix[$i][$j] = rand(1, 100);
    }
}

echo "<table border='1'>";

for ($i = 0; $i < $M; $i++) {
    $rowSum = array_sum($matrix[$i]);

    echo "<tr>";
    foreach ($matrix[$i] as $element) {
        echo "<td>{$element}</td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='$N'>Bu satrning yig'indisi: $rowSum</td>";
    echo "</tr>";
}
echo "</table>";
?><br><br>

// 3-masala.2-masalada SATR elementlari yig`indisini aniqlagan edik.<br> 
Endi USTUN elementlari yig`indisini toping<br><br>

<?php
$M = 5;
$N = 4;

$columnSums = array_fill(0, $M, 0);
$massiv = [];

for ($i = 0; $i < $N; $i++) {
    $row = [];
    for ($j = 0; $j < $M; $j++) {
        $element = rand(1, 100);
        $row[] = $element;
        $columnSums[$j] += $element;
    }
    $massiv[] = $row;
}

echo '<table border="1">';
foreach ($massiv as $row) {
    echo '<tr>';
    foreach ($row as $element) {
        echo '<td>' . $element . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

foreach ($columnSums as $index => $sum) {
    echo "Ustunning yig'indisi: $sum<br>";
}
?><br><br>

// 4-masala. M x N o'lchamda massiv berilgan. (rand(1,100); funksiyasi yordamida hosil qiling).<br>
Elementlari yig`indisi eng katta bo`lgan satrning, eng kichik elementini toping. .<br><br>

<?php

$M = 4;
$N = 5;

$matrix = array();

for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $matrix[$i][$j] = rand(1, 100);
    }
}

echo "<table border='1'>";
$maxSum = 0;
$minElement = PHP_INT_MAX;

for ($i = 0; $i < $M; $i++) {
    $rowSum = array_sum($matrix[$i]); 

    if ($rowSum > $maxSum) {
        $maxSum = $rowSum;
        $minElement = min($matrix[$i]);
    }

    echo "<tr>";
    foreach ($matrix[$i] as $element) {
        echo "<td>{$element}</td>";
    }
    echo "</tr>";
}

echo "<td colspan='$N'>Eng katta yig'indi bo'lgan satrning eng kichik elementi: $minElement</td>";
echo "</table>";
?><br><br>

// 5-masala. M x N o'lchamda massiv berilgan. (rand(1,100); funksiyasi yordamida hosil qiling).<br>
Har bir USTUN da, shu USTUN o`rta arifmetigidan katta bo`lgan elementlari sonini  toping.<br>
O`rta arifmetik deb, N ta sonning yig`indisini N ga bo`lishdan hosil bo`ladigan <br>
natijaga aytiladi. <br><br>

<?php
$M = 4;
$N = 5; 

$matrix = array();

for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $matrix[$i][$j] = rand(1, 100);
    }
}

echo "<table border='1'>";

for ($j = 0; $j < $N; $j++) {
    $columnSum = 0; 
    for ($i = 0; $i < $M; $i++) {
        $columnSum += $matrix[$i][$j];
    }
    $ortacha = $columnSum / $M;
    echo "<tr>";
    for ($i = 0; $i < $M; $i++) {
        echo "<td>{$matrix[$i][$j]}</td>";
    }
    echo "</tr>";
    $big = 0;
    for ($i = 0; $i < $M; $i++) {
        if ($matrix[$i][$j] > $ortacha) {
            $big++;
        }
    }

    echo "<tr>";
    echo "<td colspan='$M'>Ustun o'rta arifmetik yig'indisi: $columnSum, <br> O'rta arifmetikdan katta bo'lgan sonlar soni: $big</td>";
    echo "</tr>";
}

echo "</table>";
?><br><br>