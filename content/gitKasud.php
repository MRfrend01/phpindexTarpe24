<?php
echo "<h2>GIT CMD käsurida</h2>";

echo "<ol>";
echo "<li>git init - uus repo</li>";

echo <<<HTML
<li>
git config --global user.name "Saimon Siipan"<br>
git config --global user.email "Saimon.siipan@gmail.com"<br>
git config --global --list
</li>

<li>
<!-- ssh võti loomine -->
ssh-keygen -o -t rsa -C "Saimon.siipan@gmail.com"<br>
<!-- võti salvestatakse opilane/.ssh kausta -->
<!-- id_rsa.pub tuleb kopeerida oma GitHub reposse -->
</li>

<li>git add .</li>
<li>git commit -a -m "on loodud phpIndex"</li>
<li>git remote remove origin</li>
<li>git remote add origin git@github.com:MRfrend01/phpindexTarpe24.git</li>
<li>git branch -M main</li>
<li>git push -u origin main</li>
HTML;

echo "</ul>";
?>
