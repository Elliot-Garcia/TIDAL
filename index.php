<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Acupunture</title>

    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <!-- Header -->
    <?php require_once('HTML/header.html') ?>

    <!-- Main page -->
    <main>
        <section class="mainPart">
            <ul class="ul_accueil">
                <li>
                    <h1>Et la bienvenueeee</h1>
                </li>
                <li>
                    <p>Salut ceci est la section 1 (1.5.x Louis)</p>
                </li>
                <li>
                    <a href="recherche.html" class="link_recherche">
                        <span>
                            Lancer une recherche
                        </span>
                    </a>
                </li>
            </ul>
        </section>
        <section class="connexionPart">
            <h1>Connexion</h1>
            <form class="bordure_connexion">
                <ul class="ul_accueil">
                    <li>
                        <span>
                            email
                        </span>
                        <input type="text" placeholder="Ex: nom@exemple.com" />
                    </li>
                    <li>
                        <span>
                            mot de passe
                        </span>
                        <input type="password" />
                    </li>
                    <li>
                        <input type="submit">
                    </li>
                </ul>
            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>