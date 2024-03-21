<?php
require_once './modeles/stagiaire.class.php';


class StagiaireController {

    private $objStagiaire;

    public function liste_stagiaires(){
        $this->objStagiaire = new Stagiaire();
        $stagiaires = $this->objStagiaire->get_all_stagiaires();
        require "templates/listestagiaires.php";
    }

    public function supprimer_stagiaire($id){
        $this->objStagiaire = new Stagiaire();
        $this->objStagiaire->delete_stagiaire_by_id($id);
        $stagiaires = $this->objStagiaire->get_all_stagiaires();
        require "templates/listestagiaires.php";

    }

    public function ajout_stagiaire($nom, $prenom){
        $this->objStagiaire = new Stagiaire();
        $this->objStagiaire->ajouter_stagiaire($nom, $prenom);
        $stagiaires =  $this->objStagiaire->get_all_stagiaires();
        require "templates/listestagiaires.php";
    }

    public function modifie_stagiaire($nom, $prenom, $id){
        $this->objStagiaire = new Stagiaire();
        $this->objStagiaire->modifier_stagiaire($nom, $prenom, $id);
        $stagiaires = $this->objStagiaire->get_all_stagiaires();
        require "templates/listestagiaires.php";
    }

    public function obtenir_stagiaire($id){
        $this->objStagiaire = new Stagiaire();
        return $this->objStagiaire->get_stagiaire_by_id($id);

    }

    // Fonction de controle des champs de saisie des champs des formulaires
    // en Insertion et en Modification
    function control_form_fields($prenom, $nom)
    {
        $erreurs = array();

        if ((!empty($nom)) && (!empty($prenom))) {

            if (!preg_match("#^[A-Za-z-']{2,}$#", $nom)) {

                $erreurs["nom"] = "Veuillez saisir un nom valide !<br>";
            }

            if (!preg_match("#^[A-Za-z-']{2,}$#", $prenom)) {

                $erreurs["prenom"] = "Veuillez saisir un prénom valide !<br>";
            }
        } else {

            if (empty($nom)) {

                $erreurs["nom"] = "Veuillez saisir un nom pour le stagiaire !";
            } else {

                if (!preg_match("#^[A-Za-z-']{2,}$#", $nom)) {

                    $erreurs["nom"] = "Veuillez saisir un nom valide !<br>";
                }
            }

            if (empty($prenom)) {

                $erreurs["prenom"] = "Veuillez saisir un prénom pour le stagiaire !";
            } else {

                if (!preg_match("#^[A-Za-z-']{2,}$#", $prenom)) {

                    $erreurs["prenom"] = "Veuillez saisir un prénom valide !<br>";
                }
            }
        }

        return $erreurs;
    }

    // Affiche une erreur dans une vue qui centralise toutes les levées d'Exceptions 
    public function erreur($msgErreur) {
        require 'templates/erreur.php';
    }
}
?>