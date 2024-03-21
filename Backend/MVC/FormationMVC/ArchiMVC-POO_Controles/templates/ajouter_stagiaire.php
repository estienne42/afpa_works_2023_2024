<?php
$title = "Ajouter un Stagiaire";
ob_start();
?>
<h1>Ajout d'un Stagiaire</h1>
<br><br>
<form action= "index.php?action=add" method="POST" id="monform">
    
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" value="<?php if (!empty($_POST["prenom"])) {
                                                    echo $_POST["prenom"];} ?>" autocomplete="off">
    <span class="erreur"><?php if (!empty($erreurs["prenom"])) {
        echo $erreurs["prenom"];} ?>
    </span>
    <br><br>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?php if (!empty($_POST["nom"])) {
                                                    echo $_POST["nom"];} ?>" autocomplete="off">
    <span class="erreur"><?php if (!empty($erreurs["nom"])) {
        echo $erreurs["nom"];} ?>
    </span>
    <br><br>

    <input type="submit" id="submit" value="Envoyer">
    <input type="reset" id="reset" value="Annuler">
</form>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>