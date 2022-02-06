<link rel="stylesheet" href="/CSS/recherche.css">
<div class="recherche-page">
<form action="./recherche.php" method="post">
  <input class="recherche-textinput" type="text" placeholder="Recherche par symptomes">
  <ul>
      <li>
        <label for="meridien">Méridien</label>
        <select name="filtre_meridien" data-mdb-placeholder="M" data-mdb-clear-button="true">
          <option disabled selected value=null> -- selectionner un méridien -- </option>
          {foreach $data_meridien as $meridien}  
            <option value={$meridien.code}>{$meridien.nom}</option>
          {/foreach}
        </select>
      </li>
      <li>
        <label for="pathologie">Type de pathologie</label>
        <select name="filtre_type_patho" data-mdb-placeholder="M" data-mdb-clear-button="true">
        <option disabled selected value=null> -- selectionner un type de pathologie -- </option>
          {foreach $data_type_patho as $type_patho}  
            <option value={$type_patho.type}>{$type_patho.type}</option>
          {/foreach}
        </select>
      </li>
      <li>
        <label for="carac">Caractéristiques</label>
        <select name="filtre_carac" data-mdb-placeholder="M" data-mdb-clear-button="true">
          <option disabled selected value=null> -- selectionner une caractéristique -- </option>
          {foreach $data_meridien as $meridien}  
            <option value={$meridien.code}>{$meridien.nom}</option>
          {/foreach}
        </select>
      </li>
  </ul>
  <input class="recherche-submit" type="submit">
</form>
{include file="./recherche_table.tpl"}
</div>