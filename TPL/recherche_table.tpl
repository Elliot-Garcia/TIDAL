<link rel="stylesheet" href="/CSS/recherche_table.css">
<div class="wrap_scroll">
    <table>
        <thead>
            <tr>
                <th>Pathologie</th>
                <th>Symptomes</th>
            </tr>
        </thead>
        <tbody>
            {foreach $data_patho as $lines}
                <tr>
                {foreach $lines as $elements}
                    <td>{$elements}</td>
                {/foreach}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>