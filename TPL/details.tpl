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
                    {foreach $patho->getSympts() as $sympt}
                        <li>
                            {$sympt['desc']}
                        </li>
                    {/foreach}
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    Méridien :
                </td>
                <td>
                    {$patho->getMer()}
                </td>
            </tr>
            <tr>
                <td>
                    Type de pathologie :
                </td>
                <td>
                    <ul>
                    {foreach $patho->getTypes() as $type}
                        <li>
                            {$type}
                        </li>
                    {/foreach}
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    Caractéristiques :
                </td>
                <td>
                    <ul>
                    {foreach $patho->getCaracs() as $carac}
                        <li>
                            {$carac}
                        </li>
                    {/foreach}
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>