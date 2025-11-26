<?php
require_once '../header.php';
?>

    <link rel="stylesheet" href="../style/galerii.css">

    <main>
        <h1>Pildide galerii</h1>

        <!-- Pildi valimise vorm -->
        <form method="GET">
            <label>Vali pilt</label>
            <select name="pilt">
                <option value="">-- Vali pilt --</option>
                <?php
                // Piltide kausta asukoht
                $kaust = '../image/';

                // Loeme kõik failid kaustast
                $failid = scandir($kaust);

                // Käime läbi kõik failid
                foreach ($failid as $fail) {
                    // Jätame vahele punktid
                    if ($fail == '.' || $fail == '..') {
                        continue;
                    }

                    // Kontrollime kas fail on pilt
                    $failiInfo = pathinfo($fail);
                    $laiend = strtolower($failiInfo['extension']);

                    if ($laiend == 'jpg' || $laiend == 'jpeg' || $laiend == 'png' || $laiend == 'gif') {
                        // Kui see pilt on valitud, siis märgime ta valituks
                        $valitud = '';
                        if (isset($_GET['pilt']) && $_GET['pilt'] == $fail) {
                            $valitud = 'selected';
                        }

                        echo '<option value="' . $fail . '" ' . $valitud . '>' . $failiInfo['filename'] . '</option>';
                    }
                }
                ?>
            </select>
            <input type="submit" value="Vaata">
        </form>

        <?php
        // Kontrollime kas kasutaja valis pildi
        if (isset($_GET['pilt']) && $_GET['pilt'] != '') {
            $valitudPilt = $_GET['pilt'];
            $pildiAadress = $kaust . $valitudPilt;

            // Kontrollime kas pilt eksisteerib
            if (file_exists($pildiAadress)) {
                // Saame pildi info
                $pildiInfo = getimagesize($pildiAadress);
                $originaalLaius = $pildiInfo[0];
                $originaalKorgus = $pildiInfo[1];
                $formaat = $pildiInfo[2];

                // Näitame originaalpildi andmeid
                echo '<h2>Originaalpildi andmed</h2>';
                echo '<p><strong>Laius:</strong> ' . $originaalLaius . '</p>';
                echo '<p><strong>Kõrgus:</strong> ' . $originaalKorgus . '</p>';
                echo '<p><strong>Formaat:</strong> ' . $formaat . '</p>';

                // Arvutame uue pildi suuruse
                $uusLaius = 120;
                $suhe = $uusLaius / $originaalLaius;
                $uusKorgus = $originaalKorgus * $suhe;
                $uusKorgus = round($uusKorgus);

                // Näitame uue pildi andmeid
                echo '<h2>Uue pildi andmed</h2>';
                echo '<p><strong>Arvutamse suhe:</strong> ' . $suhe . '</p>';
                echo '<p><strong>Laius:</strong> ' . $uusLaius . '</p>';
                echo '<p><strong>Kõrgus:</strong> ' . $uusKorgus . '</p>';

                // Näitame pilti
                echo '<div class="gallery-item">';
                echo '<img src="' . $pildiAadress . '" width="' . $uusLaius . '" height="' . $uusKorgus . '">';
                echo '</div>';
            }
        }
        ?>
    </main>

<?php
require_once '../footer.php';
?>