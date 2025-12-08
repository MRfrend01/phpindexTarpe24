<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lõhnav Leid - Avaleht</title>
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
            max-width: 1200px;
            margin: 0 auto;
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
        .hero {
            text-align: center;
            padding: 100px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .hero h1 {
            font-size: 72px;
            color: #8b4513;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        .hero p {
            font-size: 24px;
            color: #a0522d;
            margin-bottom: 40px;
        }
        .button {
            display: inline-block;
            background-color: #d97706;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .button:hover {
            background-color: #b45309;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }
        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-card h3 {
            color: #8b4513;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .feature-card p {
            color: #666;
            line-height: 1.6;
        }
        .icon {
            font-size: 48px;
            margin-bottom: 15px;
        }
        .contact {
            background-color: #8b4513;
            color: white;
            text-align: center;
            padding: 60px 20px;
            margin-top: 80px;
        }
        .contact h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .contact p {
            font-size: 18px;
            margin: 10px 0;
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

<div class="hero">
    <h1>🥖 Lõhnav Leid</h1>
    <p>Käsitsi tehtud pagaritoodete armastus alates 1998</p>
    <a href="tooted.php" class="button">Vaata Tooteid →</a>
</div>

<div class="features">
    <div class="feature-card">
        <div class="icon">👨‍👩‍👧‍👦</div>
        <h3>Perefirma</h3>
        <p>Kolm põlvkonda pagareid, kes jagavad armastust käsitöö vastu</p>
    </div>

    <div class="feature-card">
        <div class="icon">🏆</div>
        <h3>Kvaliteet</h3>
        <p>Kasutame ainult parimaid koostisosi ilma kunstlike lisanditeta</p>
    </div>

    <div class="feature-card">
        <div class="icon">⏰</div>
        <h3>Värske</h3>
        <p>Kõik tooted küpsetatud igal hommikul kell 5:00 alates</p>
    </div>
</div>

<div class="contact">
    <h2>Külasta meid</h2>
    <p>📍 Vana-Kalamaja 15, Tallinn</p>
    <p>🕐 Avatud E-R: 7:00-19:00</p>
    <p>🕐 L-P: 8:00-17:00</p>
    <p>📞 Tel: 555-1234 | ✉️ info@lohnavleid.ee</p>
</div>
</body>
</html>