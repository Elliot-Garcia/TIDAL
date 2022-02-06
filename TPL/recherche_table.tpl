<link rel="stylesheet" href="/CSS/recherche_table.css">
<div class="wrap_scroll">
    <table>
        <thead>
            <tr>
                <th>Catégorie</th>
                <th>Caractéristiques</th>
                <th>A suivre</th>
            </tr>
        </thead>
        <tbody>
            {foreach $data as $lines}
                <tr>
                {foreach $lines as $elements}
                    <td>{$elements}</td>
                {/foreach}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>