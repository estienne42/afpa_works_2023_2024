<?php
$title = "Modifier un Stagiaire";
ob_start();
?>
<h1>Modifier un Stagiaire</h1>
<br><br>
<form action="index.php?action=modif&id=<?=$stagiaire['id_membre']; ?>" method="POST" id="monform">

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" autocomplete="off" value="<?php 
    if (isset($_POST["prenom"])) {
        
        if(!empty($erreurs["prenom"])||!empty($erreurs["nom"])){
            echo $_POST["prenom"];
        }else{
            echo $stagiaire["login_membre"];
        }
    }else{
        echo $stagiaire["login_membre"];
    }
    ?>">
    <span class="erreur"><?php if (!empty($erreurs["prenom"])) {
        echo $erreurs["prenom"];} ?>
    </span>
    <br><br>

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" autocomplete="off" value="<?php 
    if (isset($_POST["nom"])) {
        
        if(!empty($erreurs["nom"])||!empty($erreurs["prenom"])){
            echo $_POST["nom"];
        }else{
            echo $stagiaire["nom_membre"];
        }
    }else{

        echo $stagiaire["nom_membre"];

    }
    ?>">
    <span class="erreur"><?php if (!empty($erreurs["nom"])) {
        echo $erreurs["nom"];} ?>
    </span>
    <input type="hidden" name="cache" value="<?=$stagiaire["id_membre"] ?>">
    <br><br>

    <input type="submit" id="submit" value="Envoyer">
    <input type="reset"id="reset" value="Annuler">
</form>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>