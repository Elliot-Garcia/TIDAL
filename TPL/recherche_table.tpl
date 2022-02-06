<table class="recherche-table">
    <tr>
        <th>Catégorie</th>
        <th>Caractéristiques</th>
        <th>A suivre</th>
    </tr>
    {foreach $data as $lines}
        <tr>
        {foreach $lines as $elements}
            <td>{$elements}</td>
        {/foreach}
        </tr>
    {/foreach}
</table>