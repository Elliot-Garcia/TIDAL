<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="accueil.html">
                <img src="../MEDIA/Photo/logo.png" alt="logo" height="60" width="80"/>
            </a>
            <a href="user.html">
                <img src="../MEDIA/Photo/identifiant.png" alt="Connexion" height="60" width="60"/>
            </a>
        </nav>
    </header>

    <form class="form_filtre">
        <ul>
            <li>
                <label for="meridien">Méridien</label>
                <select id="meridien" name="meridien" size="3">
                    <?php foreach ($meridien) :?>
                    <option value=<?= htmlspecialchars($id)?>><?= htmlspecialchars($name)?></option>
                    <?php endforeach ?>
                </select> 
            </li>
            <li>
                <label for="pathologie">Pathologie</label>
                <select id="pathologie" name="pathologie" size="3">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
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

    <script src="../JS/symptome.js"></script>
    <main>
        
    </main>
</body>
</html>