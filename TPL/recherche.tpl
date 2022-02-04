<form class="form_filtre">
        <ul>
            <li>
                <label for="meridien">Méridien</label>
                <select multiple name="test">
                  <option value=""></option>
                  <option>American Black Bear</option>
                  <option>Asiatic Black Bear</option>
                  <option>Brown Bear</option>
                  <option>Giant Panda</option>
                  <option>Sloth Bear</option>
                  <option>Sun Bear</option>
                  <option>Polar Bear</option>
                  <option>Spectacled Bear</option>
                </select>
            </li>
            <li>
                <label for="pathologie">Pathologie</label>
                <select id="pathologie" name="pathologie" size="3">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select> 
            </li>
            <li>
                <label for="carac">Caractéristiques</label>
                <select id="carac" name="carac" size="3">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select> 
            </li>
        </ul>
</form>
{include file="./recherche_table.tpl"}