<?php
require('config.php');
global $yhendus;

$kask = $yhendus->prepare("SELECT id, pealkiri, kirjeldus, pildi_url, kuupaev FROM galerii ORDER BY kuupaev DESC");
$kask->bind_result($id, $pealkiri, $kirjeldus, $pildi_url, $kuupaev);
$kask->execute();
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lõhnav Leid - Galerii</title>
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
            max-width: 1400px;
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
        .galerii-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        .galerii-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            cursor: pointer;
        }
        .galerii-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .galerii-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .galerii-info {
            padding: 20px;
        }
        .galerii-card h3 {
            color: #8b4513;
            font-size: 22px;
            margin-bottom: 10px;
        }
        .galerii-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .kuupaev {
            color: #d97706;
            font-size: 14px;
            font-weight: bold;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }
        .modal-content img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 10px;
        }
        .modal-info {
            background: white;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .close {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 40px;
            color: white;
            cursor: pointer;
            background: rgba(0,0,0,0.5);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
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
    <h1>📸 Pildigalerii</h1>
    <p class="subtitle">Meie parimad tööd ja hetked</p>

    <div class="galerii-grid">
        <?php
        while($kask->fetch()){
            echo '<div class="galerii-card" onclick="openModal(' . $id . ')">';
            echo '<img src="' . htmlspecialchars($pildi_url) . '" alt="' . htmlspecialchars($pealkiri) . '">';
            echo '<div class="galerii-info">';
            echo '<h3>' . htmlspecialchars($pealkiri) . '</h3>';
            echo '<p>' . htmlspecialchars($kirjeldus) . '</p>';
            echo '<div class="kuupaev">' . htmlspecialchars($kuupaev) . '</div>';
            echo '</div>';
            echo '</div>';

            // Modal iga pildi jaoks
            echo '<div id="modal' . $id . '" class="modal" onclick="closeModal(' . $id . ')">';
            echo '<span class="close" onclick="closeModal(' . $id . ')">&times;</span>';
            echo '<div class="modal-content" onclick="event.stopPropagation()">';
            echo '<img src="' . htmlspecialchars($pildi_url) . '" alt="' . htmlspecialchars($pealkiri) . '">';
            echo '<div class="modal-info">';
            echo '<h3>' . htmlspecialchars($pealkiri) . '</h3>';
            echo '<p>' . htmlspecialchars($kirjeldus) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        $kask->close();
        ?>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById('modal' + id).style.display = 'flex';
    }

    function closeModal(id) {
        document.getElementById('modal' + id).style.display = 'none';
    }
</script>
</body>
</html>