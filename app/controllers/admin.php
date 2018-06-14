<?php
class Admin extends Controller
{
    /**
     * Undocumented function
     *
     * @return array
     */
    public function index()
    {
        // TODO : Link job => job_id
        // TODO : Ajouter une entrée dans la table job when user created
        // TODO : Add function when userEdit

        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        if (!isset($_SESSION['id'])) {
            $_SESSION['infos'] = admin::getInformations($_SESSION['id']);
        }
        
        $users = DB::select('select `name`, `surname`, `mail` from user where `active` = 1 order by id desc');
        $this->view('admin/index', ['users' => $users]);
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return array
     */
    public function getInformations($id) : array
    {
        $infos = DB::select('select * from user where id = '.$id.'');
        return $infos;
    }

    /**
     * Undocumented function
     *
     * @return bool
     */
    public function connexion()
    {
        if (!empty($_POST)) {
            extract($_POST);

            $admin = $this->accountExists();

            if ($admin) {
                $_SESSION['id'] = $admin['id'];

                header('Location: /admin');
            } else {
                $erreur = 'Identifiants erronés';
            }

            $this->view('admin/connexion', ['erreur' => $erreur]);
        }

        $this->view('admin/connexion');
    }

    /**
     * Undocumented function
     *
     * @return bool
     */
    public function deconnexion()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /home');
        }

        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
          session_name(),
          '',
          time() - 42000,
          $params["path"],
          $params["domain"],
          $params["secure"],
          $params["httponly"]
      );
        }

        session_destroy();
        header('Location: /');
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return array
     */
    public function details(int $id)
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        $project = DB::select('select * from project where id = ?', [$id]);

        if (!$project) {
            header('Location: /admin');
        }

        $this->view('user/userDetails', ['project' => $project]);
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    private function accountExists() : array
    {
        $admin = DB::select('select id, password from `user` where mail = ?', [$_POST['mail']]);

        if ($admin && password_verify($_POST['password'], $admin[0]['password'])) {
            return $admin[0];
        } else {
            return [];
        }
    }
}
