<?php
require('config.php');
global $yhendus;

$kask = $yhendus->prepare("SELECT id, nimetus, kirjeldus, hind, kategooria FROM tooted ORDER BY kategooria, nimetus");
$kask->bind_result($id, $nimetus, $kirjeldus, $hind, $kategooria);
$kask->execute();

// Kogume tooted kategooriate kaupa
$tooted_kategooriate_kaupa = [
    'leib' => [],
    'saiavars' => [],
    'kook' => []
];

while($kask->fetch()){
    $tooted_kategooriate_kaupa[$kategooria][] = [
        'id' => $id,
        'nimetus' => $nimetus,
        'kirjeldus' => $kirjeldus,
        'hind' => $hind
    ];
}
$kask->close();
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lõhnav Leid - Tooted</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff8e7 0%, #ffe4b5 100%);
            min-height: 100vh;
        }
        nav {
            background-color: #8b4513;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #a0522d;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        h1 {
            text-align: center;
            color: #8b4513;
            font-size: 48px;
            margin-bottom: 10px;
        }
        .subtitle {
            text-align: center;
            color: #a0522d;
            font-size: 20px;
            margin-bottom: 50px;
        }
        .kategooria {
            margin-bottom: 50px;
        }
        .kategooria h2 {
            color: #8b4513;
            font-size: 36px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #d97706;
        }
        .tooted-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        .toode-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        .toode-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .toode-card h3 {
            color: #8b4513;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .toode-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .hind {
            font-size: 28px;
            font-weight: bold;
            color: #d97706;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="avaleht.php">Avaleht</a></li>
        <li><a href="tooted.php">Tooted</a></li>
        <li><a href="galerii.php">Galerii</a></li>
        <li><a href="admin.php">Admin</a></li>
    </ul>
</nav>

<div class="container">
    <h1>Meie Tooted</h1>
    <p class="subtitle">Värskelt küpsetatud igal hommikul</p>

    <?php
    $kategooriad = [
        'leib' => 'Leivad',
        'saiavars' => 'Saiavars',
        'kook' => 'Koogid'
    ];

    foreach($kategooriad as $kat_key => $kat_nimi) {
        if(count($tooted_kategooriate_kaupa[$kat_key]) > 0) {
            echo '<div class="kategooria">';
            echo '<h2>' . htmlspecialchars($kat_nimi) . '</h2>';
            echo '<div class="tooted-grid">';

            foreach($tooted_kategooriate_kaupa[$kat_key] as $toode) {
                echo '<div class="toode-card">';
                echo '<h3>' . htmlspecialchars($toode['nimetus']) . '</h3>';
                echo '<p>' . htmlspecialchars($toode['kirjeldus']) . '</p>';
                echo '<div class="hind">€' . number_format($toode['hind'], 2, ',', ' ') . '</div>';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>
</body>
</html>