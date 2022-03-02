<section class="connexionPart">
    <h1 class="titre">Connexion</h1>
    <form class="bordure_connexion" method="post" action="/PHP/DISPLAY/accueil.php"> 
        {if $connect_failed}
         salut
         {/if}
        <ul class="ul_accueil">
            <li>
                <span>
                    email
                </span>
                <input type="text" placeholder="Ex: nom@exemple.com" name="email"/>
            </li>
            <li>
                <span>
                    mot de passe
                </span>
                <input type="password" name="mdp"/>
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
    <form action="/PHP/DISPLAY/inscription.php">
        <button>s'inscrire</button>
    </form>
</section>