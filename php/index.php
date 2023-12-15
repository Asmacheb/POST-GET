<?php session_start();?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Exercice :

1 ul avec 4 li
    -> page Accueil
    -> Page Informations
    -> Page Formulaire
    -> Page Deconnexion

Dans la page d'accueil, affichez "bonjour" suivi de votre nom (le nom doit être obtenu a l'aide du get
Dans la page information, affichez votre nom, prénom, age les uns en dessous des autres (infos obtenu depuis l'url)
Dans la page formulaire, affichez un formulaire avec 4 input texte, 1 input number et 1 input submit
Dans la page de deconnexion, affichez uniquement un bouton de deconnexion

Les ul et li doivent tout le temps apparaitre. 

<ul> -->
    <ul>
       <a href="?page=Accueil&name=Asma"><li >Accueil</li></a>
       <a href="?page=Informations"><li>Informations</li></a>
       <a href="?page=Formulaire"><li>Formulaire</li></a>
       <a href="?page=Deconnexion"><li>Deconnexion</li></a>
 
</ul>
<?php

if (isset($_GET['page'])){
    if ($_GET['page'] == "Accueil"){
       
    }
    }

    if (isset($_GET['page'])){
        if ($_GET['page'] == "Informations"){
            echo "page";
        }
        }

     if (isset($_GET['page'])){
            if ($_GET['page'] == "Formulaire"){
                echo '<form method="POST">
                    <input type="text" name="Nom">
                    <input type="text"name="Prenom">
                    <input type="text"name="Age">
                    <input type="submit"name= "submit">
                </form>';

              
            }}

            if (isset ($_POST['submit'])){
                echo $_POST["Nom"] .' '. $_POST["Prenom"] .' '. $_POST["Age"] .' '. "ans"  ;
            }


            if (isset($_GET['page'])){
                if ($_GET['page'] == "Deconnexion"){
                    echo '<button>Déconnexion</button>';
                }
                }
?>

<!-- CORRECTION -->

<!-- <ul>
    <a href="?page=accueil&name=Thomas"><li>Accueil</li></a>
    <a href="?page=informations&nom=Brandt&prenom=Thomas&age=35"><li>Informations</li></a>
    <a href="?page=formulaire"><li>Formulaire</li></a>
    <a href="?page=deconnexion"><li>Deconnexion</li></a>
    </ul> -->

    <?php 

    // if (isset($_GET['page']) && $_GET['page'] == "accueil"){
    //     if (!isset($_GET['name'])){
    //         echo "bonjour, prénom non défini";
    //     }
    //     if (isset($_GET['name'])){
    //         echo "Bonjour " . $_GET['name'];
    //     }
    // }
    // if (isset($_GET['page']) && $_GET['page'] == "informations"){
    //     if (isset($_GET['nom'])){
    //         echo "<p>" . $_GET['nom'] . "</p>";
    //     }
    //     if (isset($_GET['prenom'])){
    //         echo "<p>" . $_GET['prenom'] . "</p>";
    //     }
    //     if (isset($_GET['age'])){
    //         echo "<p>" . $_GET['age'] . "</p>";
    //     }

    // }
    // if (isset($_GET['page']) && $_GET['page'] == "formulaire"){
    //     echo '<form>
    //     <input type="text"><input type="text"><input type="text"><input type="text">
    //     <input type="number"><input type="submit">
    //     </form>';
    // }

    // if (isset($_GET['page']) && $_GET['page'] == "deconnexion"){
    //     echo '<form class="formulaire"><input type="submit" value="deconnexion"></form>';
    // }

    // if (isset($_GET['page']) && $_GET['page'] == "informations" && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])){
    //     echo "<p>" . $_GET['nom'] . "</p>";
    //     echo "<p>" . $_GET['prenom'] . "</p>";
    //     echo "<p>" . $_GET['age'] . "</p>";
    // }


    ?>
<?php
$_SESSION  ['user'] = ["name" => "Asma", "age" => 24, "mail" => "aoziehaoizeh@azojhe.com"];
var_dump($_SESSION["user"]["mail"]);
// var_dump($_SESSION)
?> 
<!-- get -->
<!-- Récupérer les informations depuis l'url -->

<!-- $_GET['truc'] -> CHeck dans l'url le mot truc et prendre l'association après le = -->

<?php echo $_GET['truc']; ?>
<!-- imprimer dans la page l'association de truc -->


<!-- post -->
<!-- Récupère la value d'un élement. Typiquement, le contenu d'un input est récupérer via le post du name de l'input -->
<form method="POST">
    <input type="text" name="inputExemple" value="test">
    <input type="submit" name="submit" value="bonjour">
    <input type="submit" name="submitExemple" value="test">

</form >
<!-- echo $_POST['inputExemple'] permet d'afficher la value de l'input. Ici, cela va afficher exemple -->
<?php echo $_POST['inputExemple']; ?>

<!-- isset -->
<?php 
    if (isset($_POST['submit'])){
        echo $_POST['inputExemple'];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $_POST['inputExemple'];
    }
?>

<!-- session -->
<!-- Données temporaires sauvegardées dans le navigateur -->
<?php 
session_start();
$_SESSION['data'] = ['nom' => "Brandt", "prenom" => "Thomas", "age" => 35];

// pour détruire les informations contenues dans Session, on va utiliser
var_dump($_SESSION);
session_destroy();
?>
</body>
</html>
