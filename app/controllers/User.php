<?php
class User extends Controller
{
    /**
     * Undocumented function
     *
     * @return array
     */
    public function index()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        $users = DB::select('select `id`, `name`, `surname`, `mail`, `active`, `role` from user order by id desc');
        $this->view('user/userList', ['users' => $users]);
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return array
     */
    public function editeUser(int $id)
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        $project = DB::select('select * from revue where id = ?', [$id]);

        if (!$project) {
            header('Location: /admin');
        }
        if (!empty($_POST)) {
            extract($_POST);
            $erreur = [];

            if (empty($revue_region)) {
                $erreur['revue_region'] = 'Titre obligatoire';
            }

            if (empty($revue_nb)) {
                $erreur['revue_nb'] = 'Numéro de la revue obligatoire';
            }

            if (empty($revue_url)) {
                $erreur['revue_url'] = 'Lien obligatoire';
            }

            if (empty($alt)) {
                $erreur['alt'] = 'Alt obligatoire';
            }

            if (isset($_FILES['revue_img']) && $_FILES['revue_img']['error'] == 0) {
                if (!in_array($_FILES['revue_img']['type'], ['image/jpeg', 'image/png'])) {
                    $erreur['revue_img'] = 'Format incorrect (PNG et JPEG acceptés)';
                } elseif ($_FILES['revue_img']['size'] > 102400) {
                    $erreur['revue_img'] = 'Image trop volumineuse (supérieure à 100Ko)';
                }
            } else {
                $erreur['revue_img'] = 'Image obligatoire';
            }

            if (!$erreur) {
                $extension = str_replace('image/', '', $_FILES['revue_img']['type']);
                $name = bin2hex(random_bytes(8)) . '.' . $extension;

                if (move_uploaded_file($_FILES['revue_img']['tmp_name'], ROOT . 'public/img/' . $name)) {
                    DB::update('update revue set revue_nb = :revue_nb, revue_region = :revue_region, revue_img = :revue_img, revue_url = :revue_url, alt = :alt where id = :id', [
                        'revue_nb' => htmlspecialchars($revue_nb),
                        'revue_region' => htmlspecialchars($revue_region),
                        'revue_url' => htmlspecialchars($revue_url),
                        'revue_img' => $name,
                        'alt' => $alt,
                        'id' => $id
                    ]);

                    header('Location: /admin');
                } else {
                    $erreur['revue_img'] = 'Erreur lors de l\'envoi du fichier';
                }
            } else {
                $this->view('user/editerRevue', ['erreur' => $erreur, 'project' => $project[0]]);
            }
        }

        $this->view('admin/editerRevue', ['project' => $project[0]]);
    }


    /**
     * Undocumented function
     *
     * @return array
     */
    public function addUser()
    {
        $users = DB::select('select `name`, `surname`, `mail` from user order by id desc');

        if ((!empty($_POST))) {
            $erreur = [];

            if (empty($_POST['name'])) {
                $erreur['name'] = 'Name is required';
            }

            if (empty($_POST['surname'])) {
                $erreur['surname'] = 'surname is required';
            }

            if (empty($_POST['mail'])) {
                $erreur['mail'] = 'Mail is required';
            }

            if (empty($_POST['password'])) {
                $erreur['password'] = 'Password is required';
            }

            if ($_POST['password'] != $_POST['confirm_password']) {
                $erreur['confirm_password'] = 'Passwords different';
            }

            if (!$erreur) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              
                DB::insert('INSERT INTO `user` (`name`, `surname`, `mail`, `password`) VALUES (:name, :surname, :mail, :password)', [
                  'name' => htmlspecialchars($_POST['name']),
                  'surname' => htmlspecialchars($_POST['surname']),
                  'mail' => htmlspecialchars($_POST['mail']),
                  'password' => $password,
                ]);
                
                $req = DB::select('select id from user order by id desc');
  
                DB::insert('INSERT INTO `user_info` (`user_id`) VALUES (:user_id)', [
                  'user_id' => $req[0]['id'],
                ]);

                header('Location: /admin');
            }

            $this->view('admin/index', ['erreur' => $erreur, 'users' => $users]);
        }
    }

    /**
     * Display userProfile page
     *
     * @return void
     */
    public function userProfile()
    {
        $this->view('user/userProfile');
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return bool
     */
    public function deleteUser(int $id)
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        DB::delete('delete from user where id = ?', [$id]);

        header('Location: /user/userList');
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function disableUser($id)
    {
        DB::update('update user set active = 0 where id = '.$id.'');
        header('Location: /user/useruserList');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function enableUser($id)
    {
        DB::update('update user set active = 1 where id = '.$id.'');
        header('Location: /user/useruserList');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editUser($id)
    {
        $user = DB::select('select * from user where id = '.$id.'');
        $userInfo = DB::select('select * from user_info where user_id = '.$id.'');


        if ((!empty($_POST))) {
            $erreur = [];

            if (empty($_POST['name'])) {
                $erreur['name'] = 'Name is required';
            }

            if (empty($_POST['surname'])) {
                $erreur['surname'] = 'surname is required';
            }

            if (empty($_POST['mail'])) {
                $erreur['mail'] = 'Mail is required';
            }

            if (!$erreur) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              
                DB::update('update user set name = :name, surname = :surname, mail = :mail, password = :password where id = :id', [
                  'name' => htmlspecialchars($_POST['name']),
                  'surname' => htmlspecialchars($_POST['surname']),
                  'mail' => htmlspecialchars($_POST['mail']),
                  'password' => $password,
                  'id' => $id
                ]);

                DB::update('update user_info set address = :address, phone = :phone, fax = :fax where user_id = :id', [
                  'address' => htmlspecialchars($_POST['address']),
                  'phone' => htmlspecialchars($_POST['phone']),
                  'fax' => htmlspecialchars($_POST['fax']),
                  'id' => $id
                ]);
      
                header('Location: /user/editUser/'.$id.'');
            }

            $this->view('user/editUser/'.$id.'', ['erreur' => $erreur, 'user' => $user, 'userInfos' => $userInfo]);
        }
        $this->view('user/editUser', ['user' => $user, 'userInfos' => $userInfo]);
    }
}
