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
        {foreach $types_patho as $type_patho}  
        <option value={$type_patho->code}>{$type_patho->type}</option>
        {/foreach}
    </select>
    </li>
    <li>
    <label for="carac">Caractéristiques</label>
    <select name="filtre_carac" data-mdb-placeholder="M" data-mdb-clear-button="true">
        <option disabled selected value=null> -- selectionner une caractéristique -- </option>
        {foreach $data_caracs as $carac}  
        <option value={$carac->code}>{$carac->carac}</option>
        {/foreach}
    </select>
    </li>
</ul>