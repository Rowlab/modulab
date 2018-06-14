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
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        $users = DB::select('select `id`, `name`, `surname`, `mail`, `active` from user order by id desc');
        $this->view('user/userList', ['users' => $users]);
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function addNote()
    {
        // $clients = DB::select('select * from client order by id desc');

        if ((!empty($_POST))) {
            $erreur = [];

            if (empty($_POST['title'])) {
                $erreur['title'] = 'Title is required';
            }

            if (empty($_POST['content'])) {
                $erreur['content'] = 'Content is required';
            }

            if (empty($_POST['type'])) {
                $erreur['type'] = 'Type is required';
            }

            if (!$erreur) {
                DB::insert('INSERT INTO `note` (`title`, `content`, `type`) VALUES (:title, :content, :type)', [
                  'title' => htmlspecialchars($_POST['title']),
                  'content' => htmlspecialchars($_POST['content']),
                  'type' => htmlspecialchars($_POST['type']),
                  'created_by' => $_SESSION['infos'][0]['name'],
                ]);
                
                $req = DB::select('select id from client order by id desc');
                $test = DB::insert('INSERT INTO `client_info` (`client_id`) VALUES (:client_id)', [
                  'client_id' => $req[0]['id'],
                ]);

                header('Location: /client');
            }

            $this->view('client/clientAdd', ['erreur' => $erreur, 'users' => $users]);
        }
        $this->view('client/clientAdd');
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
