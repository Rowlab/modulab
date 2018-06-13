<?php

class partenaires extends Controller
{

    public function index() {
        if ( !isset( $_SESSION['id']) ) {
            header( 'Location: /home' );
        }

        $projects = DB::select( 'select * from partners order by id desc' );

        if ( !empty( $_POST ) ) {
            extract( $_POST );
            $erreur = [];

            if ( empty( $nom ) ) {
                $erreur['nom'] = 'Nom obligatoire';
            }

            if ( empty( $activite ) ) {
                $erreur['activite'] = 'Activité obligatoire';
            }

            if ( empty( $departement ) ) {
                $erreur['departement'] = 'Département obligatoire';
            }

            if ( empty( $revue ) ) {
                $erreur['revue'] = 'Revue obligatoire';
            }

            if ( !$erreur ) {
                DB::insert( 'insert into partners (nom, activite, departement, revue) values (:nom, :activite, :departement, :revue)', [
                    'nom' => htmlspecialchars( $nom ),
                    'activite' => htmlspecialchars( $activite ),
                    'departement' => htmlspecialchars( $departement ),
                    'revue' => htmlspecialchars( $revue )

                ] );

                header( 'Location: /partenaires/partenaire' );
            }

            $this->view( 'admin/partenaire', ['erreur' => $erreur, 'partners' => $projects] );
        }

        $this->view( 'admin/partenaire', ['partners' => $projects] );
    }


    public function supprimerPartenaire( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        DB::delete( 'delete from partners where id = ?', [$id]);

        header( 'Location: /partenaires/partenaire' );
    }

    public function editerPartenaire( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        $project = DB::select( 'select * from partners where id = ?', [$id] );

        if ( !$project ) {
            header( 'Location: /partenaires/partenaire' );
        }
        if ( !empty( $_POST ) ) {
            extract( $_POST );
            $erreur = [];

            if ( empty( $nom ) ) {
                $erreur['nom'] = 'Nom obligatoire';
            }

            if ( empty( $activite ) ) {
                $erreur['activite'] = 'Activité obligatoire';
            }

            if ( empty( $departement ) ) {
                $erreur['departement'] = 'Département obligatoire';
            }

            if ( empty( $revue ) ) {
                $erreur['revue'] = 'Revue obligatoire';
            }

            if ( !$erreur ) {
                DB::update( 'update partners set nom = :nom, activite = :activite, departement = :departement, revue = :revue where id = :id', [
                    'nom' => htmlspecialchars( $nom ),
                    'activite' => htmlspecialchars( $activite ),
                    'departement' => htmlspecialchars( $departement ),
                    'revue' => htmlspecialchars( $revue ),
                    'id' => $id
                ] );

                header( 'Location: /partenaires/partenaire' );
            }


            else {
                $this->view( '/admin/editerPartenaire', ['erreur' => $erreur, 'project' => $project[0]] );
            }
        }

        $this->view( '/admin/editerPartenaire', ['project' => $project[0]] );
    }

}