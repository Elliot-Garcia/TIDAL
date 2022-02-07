<main>
    <div class="main_index">
            {if $connect}
                {include file='./accueil_compte.tpl'}
            {else}
                <section>
                    <p id="User_Account">Vous n'êtes pas connecté</p>
                </section>
                {include file='./connexion.tpl'}
            {/if}
    </div>
</main>