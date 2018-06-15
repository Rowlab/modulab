<?php
class Note extends Controller
{
    /**
     * Undocumented function
     *
     * @return array
     */
    public function index()
    {
        $users = DB::select('select `id`, `name`, `surname`, `mail`, `active` from user order by id desc');
        $this->view('user/userList', ['users' => $users]);
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return bool
     */
    public function deleteNote(int $id)
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
    public function editNote($id)
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
