<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Recherche</title>
</head>
<body>
    <?php require_once('../../HTML/header.html') ?>

    <main>
        <form class="form_filtre">
            <ul>
                <li>
                    <label for="meridien">Méridien</label>
                    <select id="meridien" name="meridien" size="3">
                        <option value="audi">Audi</option>
                    </select> 
                </li>
                <li>
                    <label for="pathologie">Pathologie</label>
                    <select id="pathologie" name="pathologie" size="3">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    </select> 
                </li>
                <li>
                    <label for="carac">Caractéristiques</label>
                    <select id="carac" name="carac" size="3">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                    </select> 
                </li>
            </ul>
        </form>
    </main>
</body>
</html>