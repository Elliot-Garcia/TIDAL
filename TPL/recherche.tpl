<link rel="stylesheet" href="/CSS/recherche.css">
<div class="recherche-page">
<form>
  <input class="recherche-textinput" type="text" placeholder="Recherche par symptomes">
  <ul>
      <li>
        <label for="meridien">Méridien</label>
        <select class="select" multiple data-mdb-placeholder="M" data-mdb-clear-button="true">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          <option value="4">Four</option>
          <option value="5">Five</option>
          <option value="6">Six</option>
          <option value="7">Seven</option>
          <option value="8">Eight</option>
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
  <input class="recherche-submit" type="submit">
</form>
{include file="./recherche_table.tpl"}
</div>