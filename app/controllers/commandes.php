<?php

class commandes extends Controller
{

    public function index() {
        if ( !isset( $_SESSION['id']) ) {
            header( 'Location: /home' );
        }

        $projects = DB::select( 'select * from delivery order by id desc' );

        $this->view( 'admin/commande', ['delivery' => $projects] );
    }


    public function supprimerCommande( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        DB::delete( 'delete from delivery where id = ?', [$id]);

        header( 'Location: /commandes/commande' );
    }

    public function editerCommande( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        $project = DB::select( 'select * from delivery where id = ?', [$id] );

        if ( !$project ) {
            header( 'Location: /commandes/commande' );
        }
        if ( !empty( $_POST ) ) {
            extract( $_POST );
            $erreur = [];

            if ( empty( $ref ) ) {
                $erreur['ref'] = 'Numéro de référence obligatoire';
            }

            if ( empty( $date_commande ) ) {
                $erreur['date_commande'] = 'Date la commande obligatoire';
            }

            if ( empty( $nom ) ) {
                $erreur['nom'] = 'Nom obligatoire';
            }

            if ( empty( $nb ) ) {
                $erreur['nb'] = 'Numéro obligatoire';
            }

            if ( empty( $qt ) ) {
                $erreur['qt'] = 'Quantité obligatoire';
            }

            if ( empty( $prix ) ) {
                $erreur['prix'] = 'Prix obligatoire';
            }
            if ( empty( $adresse ) ) {
                $erreur['adresse'] = 'Adresse obligatoire';
            }
            if ( empty( $pays ) ) {
                $erreur['pays'] = 'Pays obligatoire';
            }
            if ( !$erreur ) {
                DB::update( 'update delivery set ref = :ref, date_commande = :date_commande, nom = :nom, nb = :nb, qt = :qt, prix = :prix, adresse = :adresse, pays = :pays where id = :id', [
                    'ref' => htmlspecialchars( $ref ),
                    'date_commande' => htmlspecialchars( $date_commande ),
                    'nom' => htmlspecialchars( $nom ),
                    'nb' => htmlspecialchars( $nb ),
                    'qt' => htmlspecialchars( $qt ),
                    'prix' => htmlspecialchars( $prix ),
                    'adresse' => htmlspecialchars( $adresse ),
                    'pays' => htmlspecialchars( $pays ),
                    'id' => $id
                ] );

                header( 'Location: /commandes/commande' );
            }


            else {
                $this->view( '/admin/editerCommande', ['erreur' => $erreur, 'project' => $project[0]] );
            }
        }

        $this->view( '/admin/editerCommande', ['project' => $project[0]] );
    }

}