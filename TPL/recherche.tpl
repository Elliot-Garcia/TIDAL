<link rel="stylesheet" href="/CSS/recherche.css">
<div class="recherche-page">
<form action="./recherche.php" method="post">
  <input disabled class="recherche-textinput" type="text" placeholder="Recherche par symptome">
  {include file="./recherche_filtre.tpl"}
  <input class="recherche-submit" type="submit">
</form>
{include file="./recherche_table.tpl"}
</div>