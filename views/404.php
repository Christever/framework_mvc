<?php

$title = "Erreur";
ob_start();

?>

<section class="container">
    <h1>OUPS</h1>
    <p>On a perdu la page...</p>
</section>

<?php
$content = ob_get_clean();
require "base.php";
?>