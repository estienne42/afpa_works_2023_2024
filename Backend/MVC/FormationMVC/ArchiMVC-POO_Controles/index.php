<?php

require_once 'controleurs/StagiaireController.php';

$objCtrlStagiaire = new StagiaireController();

try {
    
    if (!isset($_GET["action"])) {
        
        $objCtrlStagiaire->liste_stagiaires();


    }else if(isset($_GET["action"])){
        
        if($_GET["action"]=="suppr"){

            // Pour tester la levée d'exception
            //$_GET["id"] = null;  
        
            if(isset($_GET["id"])){
                
                $objCtrlStagiaire->supprimer_stagiaire($_GET["id"]);
            }else{
                
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé</span>");
            }
        }

        if($_GET["action"]=="add"){
            
            if(isset($_POST["prenom"])||isset($_POST["nom"])){
                
                $erreurs = $objCtrlStagiaire->control_form_fields($_POST["prenom"], $_POST["nom"]);
                
            }else{

                require "templates/ajouter_stagiaire.php";
            }

            if(!empty($erreurs)){
                require "templates/ajouter_stagiaire.php";
            }else{

                if(isset($_POST["prenom"])&&isset($_POST["nom"])){

                    $objCtrlStagiaire->ajout_stagiaire($_POST["nom"], $_POST["prenom"]);
                }
            }

        }

        if($_GET["action"]=="modif"){
            
            if(isset($_GET["id"])){

                $stagiaire = $objCtrlStagiaire->obtenir_stagiaire($_GET["id"]);

                if(isset($_POST["prenom"])||isset($_POST["nom"])){

                    $erreurs = $objCtrlStagiaire->control_form_fields($_POST["prenom"], $_POST["nom"]);
                    
                }else{
                    require "templates/modifier_stagiaire.php";
                }
            
                if(!empty($erreurs)){

                    require "templates/modifier_stagiaire.php";
                    
                }else{

                    if(isset($_POST["prenom"])&&isset($_POST["nom"])&&$_POST["cache"]){
                        
                        $objCtrlStagiaire->modifie_stagiaire($_POST["nom"], $_POST["prenom"], $_POST["cache"]);
                    }
                }

            }
            
        }

    } else {
        
        throw new Exception("<h1>Page non trouvée !!!</h1>");

    }

}catch(Exception $e){

    $msgErreur = $e->getMessage();
    echo $objCtrlStagiaire->erreur($msgErreur);
}
