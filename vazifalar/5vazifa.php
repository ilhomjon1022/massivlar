// 1-masala.Mamlakatlar massividan foydalanib jadval yarating va massiv elementlarini <br>
chiqaring. <br><br>

<?php
$mamlakatlar = array(
    array(
        "nomi" => "O'zbekiston",
        "aholi_soni" => "32979000",
        "maydoni" => "448978",
        "poytaxti" => "Toshkent",
        "pul_birligi" => "So'm",
    ),
    array(
        "nomi" => "Qozog'iston",
        "aholi_soni" => "18157078",
        "maydoni" => "2724902",
        "poytaxti" => "Nursulton",
        "pul_birligi" => "Tanga",
    ),
    array(
        "nomi" => "Turkmaniston",
        "aholi_soni" => "5125693",
        "maydoni" => "488100",
        "poytaxti" => "Ashxobod",
        "pul_birligi" => "Manat",
    ),
    array(
        "nomi" => "Turkiya",
        "aholi_soni" => "80121000",
        "maydoni" => "783000",
        "poytaxti" => "Ankara",
        "pul_birligi" => "Turk lira",
    ),
    array(
        "nomi" => "Rossiya",
        "aholi_soni" => "143000000",
        "maydoni" => "17340000",
        "poytaxti" => "Mosva",
        "pul_birligi" => "Rubl",
    ),
    array(
        "nomi" => "Xitoy",
        "aholi_soni" => "1347374000",
        "maydoni" => "9596000",
        "poytaxti" => "Pekin",
        "pul_birligi" => "Yuan",
    ),
    array(
        "nomi" => "AQSH",
        "aholi_soni" => "327000000",
        "maydoni" => "9631000",
        "poytaxti" => "Washington",
        "pul_birligi" => "Dollar",
    ),
);

echo '<table border="1">';
echo '<tr>';
echo '<th>Nomi</th>';
echo '<th>Aholi soni</th>';
echo '<th>Maydoni</th>';
echo '<th>Poytaxt</th>';
echo '<th>Pul birligi</th>';
echo '</tr>';

foreach ($mamlakatlar as $mamlakat) {
    echo '<tr>';
    echo '<td>' . $mamlakat['nomi'] . '</td>';
    echo '<td>' . $mamlakat['aholi_soni'] . '</td>';
    echo '<td>' . $mamlakat['maydoni'] . '</td>';
    echo '<td>' . $mamlakat['poytaxti'] . '</td>';
    echo '<td>' . $mamlakat['pul_birligi'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?><br><br>

// 2-masala Mamlakatlar massividan, Poytaxti "Ankara" bo`lgan Davlatni aniqlang <br>

<?php
$mamlakatlar = array(
    array(
        "nomi" => "O'zbekiston",
        "aholi_soni" => "32979000",
        "maydoni" => "448978",
        "poytaxti" => "Toshkent",
        "pul_birligi" => "So'm",
    ),
    array(
        "nomi" => "Qozog'iston",
        "aholi_soni" => "18157078",
        "maydoni" => "2724902",
        "poytaxti" => "Nursulton",
        "pul_birligi" => "Tanga",
    ),
    array(
        "nomi" => "Turkmaniston",
        "aholi_soni" => "5125693",
        "maydoni" => "488100",
        "poytaxti" => "Ashxobod",
        "pul_birligi" => "Manat",
    ),
    array(
        "nomi" => "Turkiya",
        "aholi_soni" => "80121000",
        "maydoni" => "783000",
        "poytaxti" => "Ankara",
        "pul_birligi" => "Turk lira",
    ),
    array(
        "nomi" => "Rossiya",
        "aholi_soni" => "143000000",
        "maydoni" => "17340000",
        "poytaxti" => "Mosva",
        "pul_birligi" => "Rubl",
    ),
    array(
        "nomi" => "Xitoy",
        "aholi_soni" => "1347374000",
        "maydoni" => "9596000",
        "poytaxti" => "Pekin",
        "pul_birligi" => "Yuan",
    ),
    array(
        "nomi" => "AQSH",
        "aholi_soni" => "327000000",
        "maydoni" => "9631000",
        "poytaxti" => "Washington",
        "pul_birligi" => "Dollar",
    ),
);
echo "<br>";

$targetCountry = null;

foreach ($mamlakatlar as $mamlakat) {
    if ($mamlakat['poytaxti'] == 'Ankara') {
        $targetCountry = $mamlakat;
        break;
    }
}

if ($targetCountry != null) {
    echo "Poytaxti Ankara bo'lgan davlat: " . $targetCountry['nomi'];
} else {
    echo "Ankara poytaxtiga ega davlat topilmadi.";
}
?><br><br>

// 3-masala.Mamlakatlar massividan eng katta Maydonga ega bo'lgan Davlatni aniqlang<br><br>

<?php
$mamlakatlar = array(
    array(
        "nomi" => "O'zbekiston",
        "aholi_soni" => "32979000",
        "maydoni" => "448978",
        "poytaxti" => "Toshkent",
        "pul_birligi" => "So'm",
    ),
    array(
        "nomi" => "Qozog'iston",
        "aholi_soni" => "18157078",
        "maydoni" => "2724902",
        "poytaxti" => "Nursulton",
        "pul_birligi" => "Tanga",
    ),
    array(
        "nomi" => "Turkmaniston",
        "aholi_soni" => "5125693",
        "maydoni" => "488100",
        "poytaxti" => "Ashxobod",
        "pul_birligi" => "Manat",
    ),
    array(
        "nomi" => "Turkiya",
        "aholi_soni" => "80121000",
        "maydoni" => "783000",
        "poytaxti" => "Ankara",
        "pul_birligi" => "Turk lira",
    ),
    array(
        "nomi" => "Rossiya",
        "aholi_soni" => "143000000",
        "maydoni" => "17340000",
        "poytaxti" => "Mosva",
        "pul_birligi" => "Rubl",
    ),
    array(
        "nomi" => "Xitoy",
        "aholi_soni" => "1347374000",
        "maydoni" => "9596000",
        "poytaxti" => "Pekin",
        "pul_birligi" => "Yuan",
    ),
    array(
        "nomi" => "AQSH",
        "aholi_soni" => "327000000",
        "maydoni" => "9631000",
        "poytaxti" => "Washington",
        "pul_birligi" => "Dollar",
    ),
);

$maxMaydon = 0;
$largestCountry = null;

foreach ($mamlakatlar as $mamlakat) {
    $currentMaydon = $mamlakat['maydoni'];

    if ($currentMaydon > $maxMaydon) {
        $maxMaydon = $currentMaydon;
        $largestCountry = $mamlakat;
    }
}

if ($largestCountry != null) {
    echo "Eng katta maydoni bo'lgan davlat: " . $largestCountry['nomi'] . " (" . $maxMaydon . " kv.km)";
} else {
    echo "Davlatlar ro'yxatida ma'lumot topilmadi.";
}

?><br><br>

// 4-masala. Kontaktbook yasang. Yani odamlarning ismi va uning telefon nomeridan tashkil <br>
topsin. Forma da inputga telefon nomer yozsam shu telefon nomerga mos odamni ism familyasini <br>
chiqarib bersin. <br><br>

<?php
$kontaktlar = array(
    "998901234567" => "botir shokirov",
    "998912345678" => "otabek botirov",
    "998923456789" => "rustam rustamov",
);

$telefonNomeri = isset($_POST['telefon']) ? $_POST['telefon'] : '';

if (!empty($telefonNomeri) && isset($kontaktlar[$telefonNomeri])) {
    $odamningIsmi = $kontaktlar[$telefonNomeri];
    echo "Telefon raqami: $telefonNomeri<br>";
    echo "Odamning ismi: $odamningIsmi";
} else {
    echo "Telefon raqami topilmadi yoki noto'g'ri kiritildi";
}
?><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktlar</title>
</head>

<body>
    <form method="POST" action="">
        <label for="telefon">Telefon raqami:</label>
        <input type="text" id="telefon" name="telefon" required>
        <button type="submit">Izlash</button>
    </form>
</body>

</html>

// 5-masala.Mamlakat massividan foydalanib jadval yarating. (<table> dan foydalaning). <br>
    Aholi soni bo'yicha o'sib borish tartibda saralangan holda chiqsin<br><br>

    <?php
    $mamlakatlar = array(
        array(
            "nomi" => "O'zbekiston",
            "aholi_soni" => "32979000",
            "maydoni" => "448978",
            "poytaxti" => "Toshkent",
            "pul_birligi" => "So'm",
        ),
        array(
            "nomi" => "Qozog'iston",
            "aholi_soni" => "18157078",
            "maydoni" => "2724902",
            "poytaxti" => "Nursulton",
            "pul_birligi" => "Tanga",
        ),
        array(
            "nomi" => "Turkmaniston",
            "aholi_soni" => "5125693",
            "maydoni" => "488100",
            "poytaxti" => "Ashxobod",
            "pul_birligi" => "Manat",
        ),
        array(
            "nomi" => "Turkiya",
            "aholi_soni" => "80121000",
            "maydoni" => "783000",
            "poytaxti" => "Ankara",
            "pul_birligi" => "Turk lira",
        ),
        array(
            "nomi" => "Rossiya",
            "aholi_soni" => "143000000",
            "maydoni" => "17340000",
            "poytaxti" => "Mosva",
            "pul_birligi" => "Rubl",
        ),
        array(
            "nomi" => "Xitoy",
            "aholi_soni" => "1347374000",
            "maydoni" => "9596000",
            "poytaxti" => "Pekin",
            "pul_birligi" => "Yuan",
        ),
        array(
            "nomi" => "AQSH",
            "aholi_soni" => "327000000",
            "maydoni" => "9631000",
            "poytaxti" => "Washington",
            "pul_birligi" => "Dollar",
        ),
    );

    usort($mamlakatlar, function ($a, $b) {
        return $a['aholi_soni'] - $b['aholi_soni'];
    });
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mamlakatlar Jadvali</title>
    </head>

    <body>
        <table border="1">
            <tr>
                <th>Nomi</th>
                <th>Aholi soni</th>
                <th>Maydoni</th>
                <th>Poytaxt</th>
                <th>Pul birligi</th>
            </tr>
            <?php foreach ($mamlakatlar as $mamlakat) : ?>
                <tr>
                    <td><?= $mamlakat['nomi'] ?></td>
                    <td><?= $mamlakat['aholi_soni'] ?></td>
                    <td><?= $mamlakat['maydoni'] ?></td>
                    <td><?= $mamlakat['poytaxti'] ?></td>
                    <td><?= $mamlakat['pul_birligi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>

    </html>
    <br><br>

    // 6-masala. Massivlar yordamida blog hosil qiling.<br>
    Blog da Quyidagi menyular bo'lsin:<br>
    -Asosiy sahifa<br>
    -Sport yangiliklari<br>
    -APL<br>
    -OCHL<br>
    -ECHL<br>
    -Texnologiya<br>
    -Kompyuter<br>
    -Mobil telefonlar<br>
    -Bog'lanish<br>
    Menyular ni bosganda biror page ga o'tishi shart emas.<br>
    Ko'p o'lchamli massivdan foydalanib qilinsin.<br>

    Blogning quyidagi parametrlari bo'lsin:<br>
    -title<br>
    -content<br>
    -created_at - qo'shilgan sana<br>
    -author<br>
    -visited <br>

    Blogda pagination ham bo'lsin. Har bir page da 4 tadan ma'lumot ko'rsatilsin. <br><br>

    <?php
    $blog = array(
        array(
            "title" => "Asosiy sahifa",
            "content" => "Bu blogning asosiy sahifasi.",
            "created_at" => "2023-11-15",
            "author" => "Admin",
            "visited" => 500,
        ),
        array(
            "title" => "Sport yangiliklari",
            "content" => "Bu bo'limda sport yangiliklari paydo bo'ladi.",
            "created_at" => "2023-11-16",
            "author" => "Admin2",
            "visited" => 200,
        ),
        array(
            "title" => "APL",
            "content" => "APL haqida yangiliklar.",
            "created_at" => "2023-11-17",
            "author" => "Admin3",
            "visited" => 100,
        ),
        array(
            "title" => "OCHL",
            "content" => "OCHL haqida yangiliklar.",
            "created_at" => "2023-11-18",
            "author" => "Admin4",
            "visited" => 50,
        ),
        array(
            "title" => "ECHL",
            "content" => "ECHL haqida yangiliklar.",
            "created_at" => "2023-11-19",
            "author" => "Admin5",
            "visited" => 30,
        ),
        array(
            "title" => "Texnologiya",
            "content" => "Bu bo'limda texnologiya yangiliklari paydo bo'ladi.",
            "created_at" => "2023-11-20",
            "author" => "Admin6",
            "visited" => 300,
        ),
        array(
            "title" => "Kompyuter",
            "content" => "Kompyuter texnologiyalari haqida yangiliklar.",
            "created_at" => "2023-11-21",
            "author" => "Admin7",
            "visited" => 150,
        ),
        array(
            "title" => "Mobil telefonlar",
            "content" => "Mobil telefonlar haqida yangiliklar.",
            "created_at" => "2023-11-22",
            "author" => "Admin8",
            "visited" => 120,
        ),
        array(
            "title" => "Bog'lanish",
            "content" => "Bog'lanish sahifasi.",
            "created_at" => "2023-11-23",
            "author" => "Contact Us",
            "visited" => 80,
        ),
    );

    $itemsPerPage = 4;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $itemsPerPage;
    $totalPages = ceil(count($blog) / $itemsPerPage);

    $currentItems = array_slice($blog, $offset, $itemsPerPage);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                color: #333;
            }

            header {
                color: white;
                text-align: center;
                padding: 1em;
            }

            main {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                color: #333;
            }

            div.post {
                margin-bottom: 20px;
            }

            div.post h2 {
                color: #333;
            }

            div.post p {
                margin: 0 0 10px;
            }

            div.pagination {
                text-align: center;
                margin-top: 20px;
            }

            div.pagination a {
                display: inline-block;
                padding: 5px 10px;
                margin-right: 5px;
                background-color: #333;
                color: white;
                text-decoration: none;
                border-radius: 3px;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Asosiy Sahifa</h1>
        </header>

        <main>
            <?php foreach ($currentItems as $item) : ?>
                <div class="post">
                    <h2><?= $item['title'] ?></h2>
                    <p><?= $item['content'] ?></p>
                    <p><strong>Yaratilgan sana:</strong> <?= $item['created_at'] ?></p>
                    <p><strong>Muallif:</strong> <?= $item['author'] ?></p>
                    <p><strong>Ko'rishlar soni:</strong> <?= $item['visited'] ?></p>
                </div>
                <hr>
            <?php endforeach; ?>

            <div class="pagination">
                <p> Sahifa:
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <a href="?page=<?= $i ?>"><?= $i ?></a>
                    <?php endfor; ?>
                </p>
            </div>
        </main>
    </body>

    </html>

    // 7-masala. // ikki o'lchamli massiv uchun<br>
    Ro'yxatdan o'tish formasini yasang. Ismi, Familyasi, username, password, confirm password kiritish formalari<br> bo'lsin. <br>
    Talablar:<br>
    -Barcha inputlar to'ldirilishi shart;<br>
    -Ism va Familya 3 ta harfdan kam bo'lmasligi kerak;<br>
    -username - email bo'lishi kerak;<br>
    -password - 8 ta harfdan kam bo'lmasligi va oxirgi 2 harfi son bo'lishi kerak;<br>
    -confirm_password - password bilan bir xil qiymatda bo'lishi kerak.<br>

    Agar ushbu shartlarni birortasi bajarilmasa, ekranga massiv ko'rinishida qaysi input polyada qayshi shart<br> najarilmaganini xabari berilsin.<br><br>

    <?php
$ism = '';
$familya = '';
$username = '';
$password = '';
$confirm_password = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ism = isset($_POST['ism']) ? $_POST['ism'] : '';
    $familya = isset($_POST['familya']) ? $_POST['familya'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    // Qo'shimcha validatsiya funksiyasi
    function validateInput($input, $minLength) {
        return strlen($input) >= $minLength;
    }

    $requiredFields = ['ism', 'familya', 'username', 'password', 'confirm_password'];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "Maydon '$field' to'ldirilishi shart";
        }
    }
    
    if (!validateInput($ism, 3) || !validateInput($familya, 3)) {
        $errors[] = "Ism va familya 3 ta harfdan kam bo'lmasligi kerak";
    }
    
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Username - email bo'lishi kerak";
    }
    
    if (strlen($password) < 8 || substr($password, -3) !== 'son') {
        $errors[] = "Password - 8 ta harfdan kam boo'lmasligi va oxirgi 3 harfi 'son' boo'lishi kerak";
    }
    
    if ($confirm_password !== $password) {
        $errors[] = "Confirm password - password bilan bir xil boo'lishi kerak";
    }
    
    if (empty($errors)) {
        echo "Mao'lumotlar muvaffaqiyatli kiritildi";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yhatdan o'tish forma</title>
    <style>
        body {
            font-family: Montserrat, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ro'yhatdan o'tish</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="ism">Ism:</label>
            <input type="text" name="ism" value="<?php echo htmlspecialchars($ism); ?>">
            <br>

            <label for="familya">Familya:</label>
            <input type="text" name="familya" value="<?php echo htmlspecialchars($familya); ?>">
            <br>

            <label for="username">Username (Email):</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
            <br>

            <label for="password">Parol:</label>
            <input type="password" name="password">
            <br>

            <label for="confirm_password">Parolni tasdiqlang:</label>
            <input type="password" name="confirm_password">
            <br>

            <input type="submit" value="Ro'yhatdan o'tish">
        </form>

        <?php
        
        if (!empty($errors)) {
            echo '<div class="error"><ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul></div>';
        }
        ?>
    </div>
</body>
</html>

// 8-masala.$kitoblar massividan quyidagi ko'rinishda massiv hosil qiling.<br><br>

<?php

$kitoblar = [
    [
        "nomi" => "O'tgan kunlar", 
        "janr" => "tragediya", 
        "bet" => "200"
    ],
    [
        "nomi" => "Stiv Jobs", 
        "janr" => "tragediya", 
        "bet" => "200"
    ],
    [
        "nomi" => "Molxona", 
        "janr" => "komediya", 
        "bet" => "150"
    ],
    [
        "nomi" => "Hamsa", 
        "janr" => "tragediya", 
        "bet" => "580"
    ],
    [
        "nomi" => "Daftar hoshiyasidan bitiklar", 
        "janr" => "komediya", 
        "bet" => "140"
    ],
];

$tartiblanganKitoblar = [];
foreach ($kitoblar as $kitob) {
    $janr = $kitob['janr'];
    $tartiblanganKitoblar[$janr][] = $kitob;
}

print_r($tartiblanganKitoblar);

?>
