<section class="connexionPart">
    <h1>Inscription</h1>
    <form class="bordure_connexion" method="post" action="/JSON/redirect.php">  {*ne pas appeler index.php mais une page accueil*}
        <ul class="ul_accueil">
            <li>
                <span>
                    email
                </span>
                <input type="text" placeholder="Ex: nom@exemple.com" name="email_inscription"/>
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
</section>