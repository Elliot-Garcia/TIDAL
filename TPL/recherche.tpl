<link rel="stylesheet" href="/CSS/recherche.css">
<div class="recherche-page">
<form action="./recherche.php" method="post">
  {include file="./recherche_searchbar.tpl"}
  {include file="./recherche_filtre.tpl"}
  <input name="valider" class="recherche-submit" type="submit" value="Valider">
  <input class="recherche-submit" type="submit" value="Réinitialiser">
</form>
{include file="./recherche_table.tpl"}
</div>