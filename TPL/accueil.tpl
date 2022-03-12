<main>
    <div class="main_index">
        <section class="mainPart">
            <ul class="ul_accueil">
                <li>
                    <a href="/PHP/DISPLAY/recherche.php" class="link_recherche">
                        <span>
                            Lancer une recherche
                        </span>
                    </a>
                </li>
            </ul>
        </section>
        {if $connect}
            {include file='./accueil_compte.tpl'}
        {else}
            {include file='./connexion.tpl'}
        {/if}
    </div>
</main>