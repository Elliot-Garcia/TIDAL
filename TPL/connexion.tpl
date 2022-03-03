<section class="connexionPart">
    <h1 class="connexion_inscription">Connexion</h1>
    <form class="bordure_connexion" method="post" action="/PHP/DISPLAY/accueil.php"> 
        {if $connect_failed}
         <p class = "error"> Adresse email ou mot de passe incorrect</p>
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
                <input class = "bouton" type="submit">
            </li>
        </ul>
    </form>
    <h2 class ="connexion_inscription"> Inscrivez-vous </h2>
    <form action="/PHP/DISPLAY/inscription.php">
        
        <button class ="bouton">s'inscrire</button>
    </form>
</section>