<h1>Joonistamine JS-ga</h1>
<canvas id="tahvel" width="300" height="250"></canvas>
<br>
<input type="button" value="puhasta" onclick="puhasta()">
<br>
<input type="button" value="sirge joon" onclick="sirgejoon()">
<input type="button" value="Kolmnurk" onclick="kolmnurk()">
<br>
<label for="raadius">R:</label>
<input type="number" id="raadius" min="0", max="100", value="5" onchange="ring()">
<input type="button" value="Rings" onclick="ring()">
<br>
<label for="laius">laius</label>
<input type="number" id="laius" min="0", max="100", value="5" onchange="ristk6lik()">
<label for="korgus">korgus</label>
<input type="number" id="korgus" min="0", max="100", value="5" onchange="ristk6lik()">
<input type="button" value="ristkülik" onclick="ristk6lik()">
<br>

<input type="button" value="valgusfoor" onclick="foor()">
<br>
<input type="button" value="seisa" onclick="seisa()">
<br>
<input type="button" value="oota" onclick="oota()">
<br>
<input type="button" value="minne" onclick="minne()">
<br>
<input type="button" value="picsum pilt" onclick="pilt()">
<br>
<h1>Lipud</h1>
<canvas id="lipp" width="330" height="210"></canvas>
<input type="button" value="Eesti lipp" onclick="eestilipp()">
<input type="button" value="prantsuse lipp" onclick="prantsusmaa()">
<input type="button" value="saksa lipp" onclick="saksamaalipp()">
<input type="button" value="belgia lipp" onclick="belgialipp()">
<input type="button" value="kanada lipp" onclick="kanadalipp()">
