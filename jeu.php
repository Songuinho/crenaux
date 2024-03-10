<?php
$winNumber = 100;
require 'header.php';
?>
<?php if ($_GET['number'] < $winNumber) : ?>
    Le nombre est trop petit
<?php elseif ($_GET['number'] > $winNumber) : ?>
    Le nombre est trop grand
<?php else : ?>
    Vous avez trouvez le chiffre gagnant <?= $winNumber ?>
<?php endif; ?>
<form action="jeu.php" method="GET">
    <input type="text" name="number" placeholder="entre un chiffre entre 0-100">
</form>

<?php require 'footer.php' ?>