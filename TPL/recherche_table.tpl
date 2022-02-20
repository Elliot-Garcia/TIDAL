<link rel="stylesheet" href="/CSS/recherche_table.css">
<div class="wrap_scroll">
    <table>
        <thead>
            <tr>
                <th>Pathologie</th>
                <th>Détails</th>
            </tr>
        </thead>
        <tbody>
            {foreach $instances_pathos as $patho}
                <tr>
                    <td>{$patho->getDesc()}</td>
                    <td>
                        <a href="#">Détails</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>