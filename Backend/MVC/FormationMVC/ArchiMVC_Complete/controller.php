<?php
require_once 'modele.php';

function liste_stagiaires(){

    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

function supprimer_stagiaire($id){

    delete_stagiaire_by_id($id);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";

}

function ajout_stagiaire($nom, $prenom){

    ajouter_stagiaire($nom, $prenom);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

function modifie_stagiaire($nom, $prenom, $id){

    modifier_stagiaire($nom, $prenom, $id);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

function obtenir_stagiaire($id){
    return get_stagiaire_by_id($id);
}

// Affiche une erreur dans une vue qui centralise toutes les levées d'Exceptions 
function erreur($msgErreur) {
    require 'templates/erreur.php';
}

// Fonction de controle des champs de saisie des champs des formulaires
// pour l'Insertion et pour la Modification
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
?>