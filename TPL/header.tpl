<link rel="stylesheet" href="/CSS/header.css">
<header>
    <nav class="navbar">
        <a href="/PHP/DISPLAY/accueil.php">
            <img src="/MEDIA/img/logo.png" alt="logo" height="60" width="80"/>
        </a>
        <a href="/PHP/DISPLAY/bibliographie.php">
            <img src="/MEDIA/img/book_sans_32.png" alt="logo">
            </a>
        {if $connect}
            <a href="/PHP/DISPLAY/user.php">
                <img src="/MEDIA/img/verify_account.png" alt="Connexion" height="60" width="60"/>
            </a>
        {else}
            <a href="/PHP/DISPLAY/user.php">
                <img src="/MEDIA/img/identifiant.png" alt="Connexion" height="60" width="60"/>
            </a>
        {/if}

    </nav>
</header>