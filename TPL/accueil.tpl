<main>
    <div class="main_index">
        <section class="mainPart">
            <ul class="ul_accueil">
                <li>
                    <h1>Et la bienvenueeee</h1>
                </li>
                <li>
                    <p>Salut ceci est la section 1 (1.5.x Louis)</p>
                </li>
                <li>
                    <a href="PHP/DISPLAY/recherche.php" class="link_recherche">
                        <span>
                            Lancer une recherche
                        </span>
                    </a>
                </li>
            </ul>
        </section>
        {if $connexion}
            {include file='./accueil_compte.tpl'}
        {else}
            {include file='./connexion.tpl'}
        {/if}
    </div>
</main>