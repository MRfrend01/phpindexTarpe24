<h1>muusika küsitlus</h1>
<form action="">
    <fieldset>
        <legend>Milliseid muusikuid/ansambleid sa tead?</legend>
        <br>
        <input type="checkbox" name="ansambel" id="abba" value="ABBA" onchange="valiAnsambel()">
        <label for="abba">ABBA</label>
        <br>
        <input type="checkbox" name="ansambel" id="the" value="the beatles" onchange="valiAnsambel()">
        <label for="the">The Beatles</label>
        <br>
        <input type="checkbox" name="ansambel" id="system" value="system of down" onchange="valiAnsambel()">
        <label for="system">System of Down</label>
        <br>
        <input type="checkbox" name="ansambel" id="nancy" value="tormi tuuled" onchange="valiAnsambel()">
        <label for="nancy">tormi tuuled</label>
        <br>
        <div id="vastus"></div>
    </fieldset>

    <fieldset>
        <legend>Mida arvad muusika kuulamisest koolis?</legend>
        <textarea id="arvamus" name="arvamus" placeholder="Kirjuta oma arvamus siia..." oninput="kuvaArvamus()"></textarea>
        <div id="arvamusVastus"></div>
    </fieldset>


    <fieldset>
        <legend>Mitu tundi päevas sa kuulad muusikat?</legend>
        <input type="number" id="kuulamistunnid" name="kuulamistunnid" min="0" max="24" step="0.5" placeholder="Näiteks: 2" oninput="kuvaKuulamistunnid()">
        <div id="kuulamistunnidVastus"></div>
    </fieldset>

    <fieldset>
        <legend>Kas sa kuulad raadiot?</legend>
        <input type="radio" name="raadio" id="raadio-jah" value="Jah" onchange="kuvaRaadioValik()">
        <label for="raadio-jah">Jah</label>
        <input type="radio" name="raadio" id="raadio-ei" value="Ei" onchange="kuvaRaadioValik()">
        <label for="raadio-ei">Ei</label>
        <div id="raadioVastus"></div>
    </fieldset>

    <fieldset>
        <legend>Milliseid raadiojaamu oskad nimetada?</legend>
        <input list="jaamad" id="jaamadSisend" name="jaamad" placeholder="Kirjuta jaamade nimed, eralda komadega" oninput="kuvaJaamad()"/>
        <datalist id="jaamad">
            <option value="Vikerraadio">
            <option value="Raadio 2">
            <option value="Sky Plus">
            <option value="Power Hit Radio">
            <option value="Retro FM">
        </datalist>
    </fieldset>

    <fieldset>
        <legend>Millist muusikat sa kõige rohkem kuulad?</legend>
        <select id="muusikaStiil" name="muusikaStiil">
            <option value="" disabled selected>Vali stiil</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Hip-Hop">Hip-Hop</option>
            <option value="Jazz">Jazz</option>
            <option value="Elektroniline">Elektroniline</option>
            <option value="Klassikaline">Klassikaline</option>
        </select>
    </fieldset>

    <div class="buttons">
        <button id="saada">Saada</button>
        <button id="puhasta" type="reset">Puhasta</button>
    </div>

    <div id="tulemus"></div>
</form>
