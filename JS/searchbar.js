$( function() {
    $('#search').autocomplete({
        type:"GET",
        source: "/PHP/SQL/recherche_searchbar.php",
    });
});