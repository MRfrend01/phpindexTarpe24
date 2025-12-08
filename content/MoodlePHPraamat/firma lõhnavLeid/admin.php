<?php
require("config.php");
global $yhendus;

// TOOTE LISAMINE
if (isset($_POST['lisa_toode'])) {
    $kask = $yhendus->prepare("INSERT INTO tooted (nimetus, kirjeldus, hind, kategooria) VALUES (?, ?, ?, ?)");
    $kask->bind_param("ssds", $_POST['nimetus'], $_POST['kirjeldus'], $_POST['hind'], $_POST['kategooria']);
    $kask->execute();
    $kask->close();
    header("Location: admin.php");
    exit();
}

// TOOTE KUSTUTAMINE
if (isset($_GET['kustuta_toode'])) {
    $kask = $yhendus->prepare("DELETE FROM tooted WHERE id = ?");
    $kask->bind_param("i", $_GET['kustuta_toode']);
    $kask->execute();
    $kask->close();
    header("Location: admin.php");
    exit();
}

// GALERII PILDILISAMINE
if (isset($_POST['lisa_pilt'])) {
    $kask = $yhendus->prepare("INSERT INTO galerii (pealkiri, kirjeldus, pildi_url, kuupaev) VALUES (?, ?, ?, ?)");
    $kask->bind_param("ssss", $_POST['pealkiri'], $_POST['kirjeldus'], $_POST['pildi_url'], $_POST['kuupaev']);
    $kask->execute();
    $kask->close();
    header("Location: admin.php");
    exit();
}

// GALERII PILDIKUSTUTAMINE
if (isset($_GET['kustuta_pilt'])) {
    $kask = $yhendus->prepare("DELETE FROM galerii WHERE id = ?");
    $kask->bind_param("i", $_GET['kustuta_pilt']);
    $kask->execute();
    $kask->close();
    header("Location: admin.php");
    exit();
}

// LAEME TOOTED
$tooted = $yhendus->query("SELECT * FROM tooted ORDER BY kategooria, nimetus");

// LAEME GALERII PILDID
$galerii = $yhendus->query("SELECT * FROM galerii ORDER BY kuupaev DESC");
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Lõhnav Leid</title>
    <style>
        body {
            font-family: Arial;
            background: #fff5e6;
            padding: 20px;
        }
        nav {
            background: #8b4513;
            padding: 15px 0;
            margin-bottom: 40px;
        }
        nav ul {
            display: flex;
            justify-content: center;
            gap: 30px;
            list-style: none;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
        }
        h2 {
            margin-top: 40px;
            color: #8b4513;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            max-width: 600px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #d97706;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #f8e8d2;
        }
        .delete {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }
        img.gal {
            width: 120px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
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

<h1>Administraatori paneel</h1>

<!-- ===================== -->
<!--       TOOTED          -->
<!-- ===================== -->

<h2>Lisa uus toode</h2>

<form method="POST">
    <input type="text" name="nimetus" placeholder="Toote nimetus" required>
    <textarea name="kirjeldus" placeholder="Kirjeldus"></textarea>
    <input type="number" step="0.01" name="hind" placeholder="Hind (€)" required>

    <select name="kategooria" required>
        <option value="leib">Leib</option>
        <option value="saiavars">Saiavars</option>
        <option value="kook">Kook</option>
    </select>

    <button type="submit" name="lisa_toode">Lisa toode</button>
</form>

<h2>Olemasolevad tooted</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nimetus</th>
        <th>Kategooria</th>
        <th>Hind</th>
        <th>Kustuta</th>
    </tr>

    <?php while ($r = $tooted->fetch_assoc()): ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= htmlspecialchars($r['nimetus']) ?></td>
            <td><?= htmlspecialchars($r['kategooria']) ?></td>
            <td><?= number_format($r['hind'], 2, ',', ' ') ?> €</td>
            <td><a class="delete" href="admin.php?kustuta_toode=<?= $r['id'] ?>">X</a></td>
        </tr>
    <?php endwhile; ?>
</table>

<!-- ===================== -->
<!--       GALERII         -->
<!-- ===================== -->

<h2>Lisa uus pilt galeriisse</h2>

<form method="POST">
    <input type="text" name="pealkiri" placeholder="Pildi pealkiri" required>
    <textarea name="kirjeldus" placeholder="Kirjeldus"></textarea>
    <input type="text" name="pildi_url" placeholder="Pildi URL" required>
    <input type="date" name="kuupaev" required>

    <button type="submit" name="lisa_pilt">Lisa pilt</button>
</form>

<h2>Galerii pildid</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Pilt</th>
        <th>Pealkiri</th>
        <th>Kuupäev</th>
        <th>Kustuta</th>
    </tr>

    <?php while ($g = $galerii->fetch_assoc()): ?>
        <tr>
            <td><?= $g['id'] ?></td>
            <td><img class="gal" src="<?= htmlspecialchars($g['pildi_url']) ?>"></td>
            <td><?= htmlspecialchars($g['pealkiri']) ?></td>
            <td><?= htmlspecialchars($g['kuupaev']) ?></td>
            <td><a class="delete" href="admin.php?kustuta_pilt=<?= $g['id'] ?>">X</a></td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
