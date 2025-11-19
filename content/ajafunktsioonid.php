<div class="aja-flex">

    <div class="aja-box">
        <?php
        echo "<h1>ajafunktsioonid</h1>";
        date_default_timezone_set('Europe/Tallinn');
        echo "<br>";
        echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>timezone </a>";
        echo "<br>";
        echo "time() - aeg sekundites ".time();
        echo "<br>";
        echo "date() -".date("d.m.Y G:i:s", time());
        echo "<pre>
date('d.m.Y G:i:s', time());
d- päev 01...31
m- kuu 1...12
Y- neljakohane arv 
G- 24h formaat
i- minutid 0...59
s- sekundid 0...59
</pre>";
        ?>
    </div>

    <div class="aja-box">
        <?php
        echo "<br>";
        echo "<h2>Tehted kuupäevaga</h2>";
        echo "<br>";
        echo "+1min = time()+60 = ".date("d.m.Y G:i:s", time()+60);
        echo "<br>";
        echo "+1tund = time()+60*60 = ".date("d.m.Y G:i:s", time()+60*60);
        echo "<br>";
        echo "+1päev = time()+60*60*24 = ".date("d.m.Y G:i:s", time()+60*60*24);
        ?>
    </div>

    <div class="aja-box">
        <?php
        echo "<br>";
        echo "<h2>kuupäeva genereerimine</h2>";
        echo "<br>";
        echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
        echo "<br>";
        $synnipaev=mktime(7,0,0,1,3,2008);
        echo "minu sünnipäev ".date("d.m.Y G:i:s", $synnipaev);
        echo "<br>";
        echo "massiivi abil näidata tänane kuu nimi";
        echo "<br>";
        $kuud=array(1=>'jaanuar','veebruar','märts','april','mai','juuni','juuli','august','oktoober','november','december');
        $paev=date('d');
        $aasta=date('Y');
        $kuu=$kuud[date('m')];
        echo "tänane kuupäev kuu nimega" .$paev.".".$kuu." ".$aasta."a";
        echo "<br><br>";
        echo "minu sünnipäev kuu nimega ";
        $kuud = array(
            1=>'jaanuar','veebruar','märts','april','mai','juuni',
            'juuli','august','september','oktoober','november','detsember'
        );
        $synnipaev_paev = 3;
        $synnipaev_kuu = 1;
        $synnipaev_aasta = 2008;
        echo $synnipaev_paev.".".$kuud[$synnipaev_kuu]." ".$synnipaev_aasta."a";
        ?>
    </div>

</div>
