<?php

/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 17/05/2017
 * Time: 23:54
 */
class actu extends Controller
{
    public function actu() {

        $projects = DB::select( 'select * from news order by id desc' );

        foreach ( $projects as $key => $project ) {
            $projects[$key]['name_archi'] = ( $project['name_archi'] );
            $projects[$key]['name_construct'] = ( $project['name_construct'] );
            $projects[$key]['date_news'] = ( $project['date_news'] );
            $projects[$key]['type_construct'] = ( $project['type_construct'] );
            $projects[$key]['place'] = ( $project['place'] );
            $projects[$key]['description'] = ( $project['description'] );

        }

        $this->view( 'home/actu', ['projects' => $projects] );

    }


}