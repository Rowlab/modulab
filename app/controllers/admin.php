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
        if (isset($_SESSION['id'])) {
            $_SESSION['infos'] = admin::getInformations($_SESSION['id']);
            $users = DB::select('select `name`, `surname`, `mail` from user where `active` = 1 order by id desc');
            $this->view('admin/index', ['users' => $users]);
        } else {
            $this->view('templates/login');
        }
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

            $this->view('templates/login', ['erreur' => $erreur]);
        }

        $this->view('templates/login');
    }

    /**
     * Undocumented function
     *
     * @return bool
     */
    public function deconnexion()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /');
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
