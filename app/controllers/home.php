<?php
class Home extends Controller {
  public function index() {
    $projects = DB::select( 'select * from news order by id desc' );

    $this->view( 'home/index', ['projects' => $projects] );
  }

    public function compte() {
        $projects = DB::select( 'select * from news order by id desc' );


        $this->view( 'home/compte', ['projects' => $projects] );
    }

    public function actualites() {

        $projects = DB::select( 'select * from news order by id desc' );


        $this->view( 'home/actualites', ['projects' => $projects] );

    }

    public function panier() {

        $project = DB::select( 'select * from delivery order by id desc' );

        $this->view( 'home/panier', ['project' => $project]);

    }

    public function partenaire() {

        $project = DB::select( 'select * from delivery order by id desc' );

        $this->view( 'home/partenaire', ['project' => $project]);

    }

    public function partenaires() {

        $project = DB::select( 'select * from delivery order by id desc' );

        $this->view( 'home/partenaires', ['project' => $project]);

    }

    public function regions() {

        $project = DB::select( 'select * from delivery order by id desc' );

        $this->view( 'home/regions', ['project' => $project]);

    }

    public function catalogue() {

        $projects = DB::select( 'select * from revue order by id desc' );

        foreach ( $projects as $key => $project ) {
            $projects[$key]['revue_nb'] = ( $project['revue_nb'] );
            $projects[$key]['revue_region'] = ( $project['revue_region'] );
            $projects[$key]['revue_img'] = ( $project['revue_img'] );
            $projects[$key]['revue_url'] = ( $project['revue_url'] );

        }

        $this->view( 'home/catalogue', ['projects' => $projects] );

    }


}
