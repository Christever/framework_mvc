<?php

$title = "Accueil";
ob_start();

?>

<section class="container">
    <h1 class="text-center">Bienvenue sur mon site</h1>


    <?php
    while ($user = $requete->fetch()){
?>
    <p><b><?=$user["firstname"]?> <?= $user["lastname"]?></b>: <?= $user["email"]?></p>
    <?php
    }
?>
</section>
<?php
$content = ob_get_clean();
require "base.php";
?>