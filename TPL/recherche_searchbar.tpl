<script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="/JS/searchbar.js"></script>
<input
    {if !$connect}
        disabled
    {/if}
name="filtre_sympt" class="recherche-textinput" id="search" type="text" placeholder="Recherche par symptome">