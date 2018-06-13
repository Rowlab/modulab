<?php

class actualites extends Controller
{

    public function index() {
        if ( !isset( $_SESSION['id']) ) {
            header( 'Location: /home' );
        }

        $projects = DB::select( 'select * from news order by id desc' );

        if ( !empty( $_POST ) ) {
            extract( $_POST );
            $erreur = [];

            if ( empty( $name_archi ) ) {
                $erreur['name_archi'] = 'Nom de l\'architechque obligatoire';
            }

            if ( empty( $name_construct ) ) {
                $erreur['name_construct'] = 'Nom de la construction obligatoire';
            }

            if ( empty( $type_construct ) ) {
                $erreur['type_construct'] = 'Type de construction obligatoire';
            }

            if ( empty( $place ) ) {
                $erreur['place'] = 'Place obligatoire';
            }

            if ( empty( $description ) ) {
                $erreur['description'] = 'Description obligatoire';
            }

            if ( empty( $date_news ) ) {
                $erreur['date_news'] = 'Date obligatoire';
            }

                if ( !$erreur ) {
                    DB::insert( 'insert into news (name_archi, name_construct, type_construct, place, description, date_news) values (:name_archi, :name_construct, :type_construct, :place, :description, :date_news)', [
                        'name_archi' => htmlspecialchars( $name_archi ),
                        'name_construct' => htmlspecialchars( $name_construct ),
                        'type_construct' => htmlspecialchars( $type_construct ),
                        'place' => htmlspecialchars( $place ),
                        'date_news' => htmlspecialchars( $date_news ),
                        'description' => htmlspecialchars( $description )

                    ] );

                    header( 'Location: /actualites/actu' );
            }

            $this->view( 'admin/actu', ['erreur' => $erreur, 'revue' => $projects] );
        }

        $this->view( 'admin/actu', ['news' => $projects] );
    }


    public function supprimerActu( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        DB::delete( 'delete from news where id = ?', [$id]);

        header( 'Location: /actualites/actu' );
    }

    public function editerActu( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        $project = DB::select( 'select * from news where id = ?', [$id] );

        if ( !$project ) {
            header( 'Location: /actualites/actu' );
        }
        if ( !empty( $_POST ) ) {
            extract( $_POST );
            $erreur = [];

            if ( empty( $name_archi ) ) {
                $erreur['name_archi'] = 'Nom de l\'architechque obligatoire';
            }

            if ( empty( $name_construct ) ) {
                $erreur['name_construct'] = 'Nom de la construction obligatoire';
            }

            if ( empty( $type_construct ) ) {
                $erreur['type_construct'] = 'Type de construction obligatoire';
            }

            if ( empty( $place ) ) {
                $erreur['place'] = 'Place obligatoire';
            }

            if ( empty( $description ) ) {
                $erreur['description'] = 'Description obligatoire';
            }

            if ( empty( $date_news ) ) {
                $erreur['date_news'] = 'Date obligatoire';
            }

                if ( !$erreur ) {
                    DB::update( 'update news set name_archi = :name_archi, name_construct = :name_construct, type_construct = :type_construct, place = :place, description = :description, date_news = :date_news where id = :id', [
                        'name_archi' => htmlspecialchars( $name_archi ),
                        'name_construct' => htmlspecialchars( $name_construct ),
                        'type_construct' => htmlspecialchars( $type_construct ),
                        'place' => htmlspecialchars( $place ),
                        'description' => htmlspecialchars( $description ),
                        'date_news' => htmlspecialchars( $date_news ),
                        'id' => $id
                    ] );

                    header( 'Location: /actualites/actu' );
                }


            else {
                $this->view( '/admin/editerActu', ['erreur' => $erreur, 'project' => $project[0]] );
            }
        }

        $this->view( '/admin/editerActu', ['project' => $project[0]] );
    }

}