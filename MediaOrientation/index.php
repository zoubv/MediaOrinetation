<?php



include "view/commun/header.php";

// Système de routage
$page = isset($_GET["page"]) ? $_GET["page"] : "accueil";

switch ($page) {
    case "accueil":
        include "view/accueil.php";
        break;

    case "fiche_metier":
        include "view/fiche_Metier.php";
        break;

    case "interview":
        include "view/interview.php";
        break;

    case "domaines":
        include "view/domaines.php";
        break;

    case "prof_dashboard.php":
         include "view/prof_dashboard.php";
         break;

    default:
        include "view/accueil.php"; 
        break;
}

// Inclusion du footer
include "view/commun/footer.php";
?>