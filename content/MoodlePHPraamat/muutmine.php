<?php
 require('config.php');
global $yhendus;

  // Uue teate lisamine
  if (isset($_REQUEST["uusleht"])) {
      if(!empty(trim($_REQUEST["pealkiri"]))) {
    $kask = $yhendus->prepare("INSERT INTO lehed (pealkiri, sisu, kuupaev, autor) VALUES (?, ?, ?, ?)");
    $kask->bind_param("ssss", $_REQUEST["pealkiri"], $_REQUEST["sisu"], $_REQUEST["kuupaev"], $_REQUEST["autor"]);
    $kask->execute();
    header("Location: ".$_SERVER["PHP_SELF"]);
    $yhendus->close();
    exit();
  }
      }

  // Teate kustutamine
  if (isset($_REQUEST["kustutusid"])) {
    $kask = $yhendus->prepare("DELETE FROM lehed WHERE id=?");
    $kask->bind_param("i", $_REQUEST["kustutusid"]);
    $kask->execute();
  }

  // Teate muutmine
  if (isset($_REQUEST["muutmisid"])) {
    $kask = $yhendus->prepare("UPDATE lehed SET pealkiri=?, sisu=?, kuupaev?, autor=? WHERE id=?");
    $kask->bind_param(
      "ssssi",
      $_REQUEST["pealkiri"],
      $_REQUEST["sisu"],
      $_REQUEST["kuupaev"],
      $_REQUEST["autor"],
      $_REQUEST["muutmisid"]
    );
    $kask->execute();
  }
?>
<!DOCTYPE html>
<html lang="et">
  <head>
    <title>Teated lehel</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <style type="text/css">
       #menyykiht {
         float: left;
         padding-right: 30px;
       }
       #sisukiht {
         float: left;
       }
       #jalusekiht {
         clear: left;
         margin-top: 20px;
         font-size: 0.9em;
         color: #666;
       }
    </style>
  </head>
  <body>
    <div id="menyykiht">
        <h2>Teated</h2>
        <ul>
          <?php
          // loendi kuvamine
             $kask = $yhendus->prepare(
               "SELECT id, pealkiri FROM lehed"
             );
             $kask->bind_result($id, $pealkiri);
             $kask->execute();
             while ($kask->fetch()) {
               echo "<li><a href='".$_SERVER["PHP_SELF"].
                    "?id=$id'>".htmlspecialchars($pealkiri)."</a></li>";
             }
          ?>
        </ul>
        <a href="<?=$_SERVER['PHP_SELF']?>?lisamine=jah">Lisa ...</a>
    </div>

    <div id="sisukiht">
       <?php
         // Ühe teate kuvamine või muutmine
         if (isset($_REQUEST["id"])) {
            $kask = $yhendus->prepare("SELECT id, pealkiri, sisu, kuupaev, autor FROM lehed WHERE id=?");
            $kask->bind_param("i", $_REQUEST["id"]);
            $kask->bind_result($id, $pealkiri, $sisu, $kuupaev, $autor);
            $kask->execute();

            if ($kask->fetch()) {
             if (isset($_REQUEST["muutmine"])) {
                echo "
                   <form action='".$_SERVER["PHP_SELF"]."'>
                     <input type='hidden' name='muutmisid' value='$id'/>
                     <h2>Teate muutmine</h2>
                     <dl>
                       <dt>Pealkiri:</dt>
                       <dd>
                         <input type='text' name='pealkiri' value='".
                                    htmlspecialchars($pealkiri)."'/>
                       </dd>
                       <dt>Teate sisu:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='sisu'>".
                            htmlspecialchars($sisu)."</textarea>
                       </dd>
                       <dt>kuupäev:</dt>
                       <dd>
                         <input type='date' name='kuupaev' value='".
                    htmlspecialchars($kuupaev)."'/>
                       </dd>
                       <dt>autor:</dt>
                       <dd>
                         <input type='text' name='autor' value='".
                    htmlspecialchars($autor)."'/>
                       </dd>
                       
                     </dl>                      
                     <input type='submit' value='Muuda' />
                   </form>
                ";
             } else {
              echo "<h2>".htmlspecialchars($pealkiri)."</h2>";
              echo "lehe sisu: ". htmlspecialchars($sisu);
              echo "<br>";
              echo "lisamise kuupäev: ". htmlspecialchars($kuupaev);
                echo "<br>";
              echo "autor: ". htmlspecialchars($autor);
                  echo "<br>";
              echo "<br /><a href='".$_SERVER["PHP_SELF"].
                   "?kustutusid=$id'>kustuta</a> ";
              echo "<a href='".$_SERVER["PHP_SELF"].
                   "?id=$id&amp;muutmine=jah'>muuda</a>";
             }
            } else {
              echo "Vigased andmed.";
            }
         }

         // Uue teate lisamise vorm
         if (isset($_REQUEST["lisamine"])) {
           ?>
             <form action="<?=$_SERVER["PHP_SELF"]?>">
              <input type="hidden" name="uusleht" value="jah" />
              <h2>Uue teate lisamine</h2>
              <dl>
                  <dt><label for="Pealkiri">Pealkiri:</label></dt>
                <dd>

                 <input type="text" name="pealkiri" id="Pealkiri" />
                </dd>
                <dt><label for="sisu">Teate sisu:</label></dt>
                <dd>
                  <textarea rows="20" cols="30" name="sisu" id="sisu"></textarea>
                </dd>
                  <dt><label for="kuupaev">kuupäev:</label></dt>
                  <dd>
                      <input type="date" name="kuupaev" id="kuupaev">
                  </dd>
                  <dt><label for="autor">autori nimi:</label></dt>
                  <dd> <input type="text" name="autor" id="autor" ></dd>
               </dl>
               <input type="submit" value="Sisesta" />
             </form>
           <?php
         }
       ?>
    </div>

    <div id="jalusekiht">
       Lehe tegi Saimon
    </div>
  </body>
</html>
<?php
  $yhendus->close();
?>