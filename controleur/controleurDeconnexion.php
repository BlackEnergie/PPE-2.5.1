<?php

if (isset($_SESSION['intervenant']) && !is_null($_SESSION['intervenant'])){
    $_SESSION['intervenant'] = null;
    $_SESSION['m2lMP']="accueil";
    header('Location:index.php');
}
