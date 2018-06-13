<?php
class Admin extends Controller {
  public function index() {
      if ( !isset( $_SESSION['id']) ) {
          header( 'Location: /home' );
      }

    $projects = DB::select( 'select * from revue order by id desc' );

    if ( !empty( $_POST ) ) {
      extract( $_POST );
      $erreur = [];

      if ( empty( $revue_region ) ) {
        $erreur['revue_region'] = 'Titre obligatoire';
      }

     if ( empty( $revue_nb ) ) {
        $erreur['revue_nb'] = 'Numéro de la revue obligatoire';
    }

    if ( empty( $revue_url ) ) {
            $erreur['revue_url'] = 'Lien obligatoire';
    }
        if ( empty( $alt ) ) {
            $erreur['alt'] = 'Alt obligatoire';
        }

      if ( isset( $_FILES['revue_img'] ) && $_FILES['revue_img']['error'] == 0 ) {
        if ( !in_array( $_FILES['revue_img']['type'], ['image/jpeg', 'image/png'] ) ) {
          $erreur['revue_img'] = 'Format incorrect (PNG et JPEG acceptés)';
        }
        elseif ( $_FILES['revue_img']['size'] > 502400 ) {
          $erreur['revue_img'] = 'Image trop volumineuse (supérieure à 500Ko)';
        }
      }
      else {
        $erreur['revue_img'] = 'Image obligatoire';
      }

      if ( !$erreur ) {
        $extension = str_replace( 'image/', '', $_FILES['revue_img']['type'] );
        $name = bin2hex( random_bytes( 8 ) ) . '.' . $extension;

        if ( move_uploaded_file( $_FILES['revue_img']['tmp_name'], ROOT . 'public/img/' . $name ) ) {
          DB::insert( 'insert into revue (revue_nb, revue_region, revue_img, revue_url, alt) values (:revue_nb, :revue_region, :revue_img, :revue_url, :alt)', [
            'revue_nb' => htmlspecialchars( $revue_nb ),
            'revue_region' => htmlspecialchars( $revue_region ),
            'revue_url' => htmlspecialchars( $revue_url ),
            'revue_img' => $name,
            'alt' => htmlentities( $alt )
          ] );

          header( 'Location: /admin' );
        }
        else {
          $erreur['revue_img'] = 'Erreur lors de l\'envoi du fichier';
        }
      }

      $this->view( 'admin/index', ['erreur' => $erreur, 'revue' => $projects] );
    }

    $this->view( 'admin/index', ['revue' => $projects] );
  }

  public function connexion() {
    if ( isset( $_SESSION['id'] ) ) {
      header( 'Location: /admin' );
    }

    if ( !empty( $_POST ) ) {
      extract( $_POST );

      $admin = $this->accountExists();

      if ( $admin ) {
        $_SESSION['id'] = $admin['id'];

        header( 'Location: /admin' );
      }
      else {
        $erreur = 'Identifiants erronés';
      }

      $this->view( 'admin/connexion', ['erreur' => $erreur] );
    }

    $this->view( 'admin/connexion' );
  }

  public function deconnexion() {
    if ( !isset( $_SESSION['id'] ) ) {
        header( 'Location: /home' );
    }

    $_SESSION = [];

    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
    }

    session_destroy();
    header( 'Location: /' );
  }

  public function supprimerRevue( int $id ) {
    if ( !isset( $_SESSION['id'] ) ) {
      header( 'Location: /admin/connexion' );
    }

    $project = DB::select( 'select revue_img from revue where id = ?', [$id] );

    unlink( ROOT . 'public/img/' . $project[0]['revue_img'] );

    DB::delete( 'delete from revue where id = ?', [$id]);

    header( 'Location: /admin' );
  }


    public function details( int $id ) {
        if ( !isset( $_SESSION['id'] ) ) {
            header( 'Location: /admin/connexion' );
        }

        $project = DB::select( 'select * from project where id = ?', [$id] );

        if ( !$project ) {
            header( 'Location: /admin' );
        }

        $this->view( 'admin/details', ['project' => $project]);

    }


    public function editerRevue( int $id ) {
    if ( !isset( $_SESSION['id'] ) ) {
      header( 'Location: /admin/connexion' );
    }

    $project = DB::select( 'select * from revue where id = ?', [$id] );

    if ( !$project ) {
      header( 'Location: /admin' );
    }
        if ( !empty( $_POST ) ) {
            extract( $_POST );
            $erreur = [];

            if ( empty( $revue_region ) ) {
                $erreur['revue_region'] = 'Titre obligatoire';
            }

            if ( empty( $revue_nb ) ) {
                $erreur['revue_nb'] = 'Numéro de la revue obligatoire';
            }

            if ( empty( $revue_url ) ) {
                $erreur['revue_url'] = 'Lien obligatoire';
            }

            if ( empty( $alt ) ) {
                $erreur['alt'] = 'Alt obligatoire';
            }

            if ( isset( $_FILES['revue_img'] ) && $_FILES['revue_img']['error'] == 0 ) {
                if ( !in_array( $_FILES['revue_img']['type'], ['image/jpeg', 'image/png'] ) ) {
                    $erreur['revue_img'] = 'Format incorrect (PNG et JPEG acceptés)';
                }
                elseif ( $_FILES['revue_img']['size'] > 102400 ) {
                    $erreur['revue_img'] = 'Image trop volumineuse (supérieure à 100Ko)';
                }
            }
            else {
                $erreur['revue_img'] = 'Image obligatoire';
            }

            if ( !$erreur ) {
                $extension = str_replace( 'image/', '', $_FILES['revue_img']['type'] );
                $name = bin2hex( random_bytes( 8 ) ) . '.' . $extension;

                if ( move_uploaded_file( $_FILES['revue_img']['tmp_name'], ROOT . 'public/img/' . $name ) ) {
                    DB::update( 'update revue set revue_nb = :revue_nb, revue_region = :revue_region, revue_img = :revue_img, revue_url = :revue_url, alt = :alt where id = :id', [
                        'revue_nb' => htmlspecialchars( $revue_nb ),
                        'revue_region' => htmlspecialchars( $revue_region ),
                        'revue_url' => htmlspecialchars( $revue_url ),
                        'revue_img' => $name,
                        'alt' => $alt,
                        'id' => $id
                    ] );

                    header( 'Location: /admin' );
                }
                else {
                    $erreur['revue_img'] = 'Erreur lors de l\'envoi du fichier';
                }
            }
      else {
        $this->view( 'admin/editerRevue', ['erreur' => $erreur, 'project' => $project[0]] );
      }
    }

    $this->view( 'admin/editerRevue', ['project' => $project[0]] );
  }

  private function accountExists() : array {
    $admin = DB::select( 'select id, password from `connection` where login = ?', [$_POST['login']] );

    if ( $admin && password_verify( $_POST['password'], $admin[0]['password'] ) ) {
      return $admin[0];
    }
    else {
      return [];
    }
  }
}
