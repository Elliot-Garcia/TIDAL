<link rel="stylesheet" href="/CSS/details.css">
<div class="recherche-page">
    <h1>{$patho->getDesc()}</h1>
    <table>
        <tbody>
            <tr>
                <td>
                    Symptomes liés :
                </td>
                <td>
                    <ul>
                    {foreach $patho->find_symptomes($patho->getIdp()) as $sympt}
                        <li>
                            {$sympt}
                        </li>
                    {/foreach}
                    </ul>
                </td>
                <td>
                    Méridien :
                </td>
                <td>
                    {$patho->find_meridien($patho->getIdp())}
                </td>
            </tr>
        </tbody>
    </table>
</div>