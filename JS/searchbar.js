$(document).ready(function() {
    $('#search').autocomplete({
        source: "/PHP/SQL/recherche_searchbar.php",
    });
});