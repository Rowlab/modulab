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

                if (isset($_POST['job'])) {
                    // DB::insert('insert INTO job where ')
                }

                DB::update('update user_info set address = :address, phone = :phone, fax = :fax where user_id = :id', [
                  'address' => htmlspecialchars($_POST['address']),
                  'phone' => htmlspecialchars($_POST['phone']),
                  'fax' => htmlspecialchars($_POST['fax']),
                  'id' => $id
                ]);
      
                header('Location: /user/userList/'.$id.'');
            }

            $this->view('user/editUser/'.$id.'', ['erreur' => $erreur, 'user' => $user, 'userInfos' => $userInfo]);
        }
        $this->view('user/editUser', ['user' => $user, 'userInfos' => $userInfo]);
    }
}
