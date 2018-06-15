<?php
class Client extends Controller
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
        $clients = DB::select('select * from client order by id desc');
        $this->view('client/clientlist', ['clients' => $clients]);
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function addNote($id = null)
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

            if (!$erreur) {
                $req = DB::insert('INSERT INTO `note` (`title`, `content`, `created_by`, `client_id`) VALUES (:title, :content, :created_by, :client_id)', [
                  'title' => htmlspecialchars($_POST['title']),
                  'content' => htmlspecialchars($_POST['content']),
                  'created_by' => $_SESSION['infos'][0]['name'],
                  'client_id' => $_POST['id'],
                ]);
                header('Location: /client/detailsClient/' .$_POST['id']);
            }

            $this->view('client/clientNote/', ['erreur' => $erreur]);
        }

        $this->view('client/clientNote', ['id' => $id]);
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return array
     */
    public function detailsClient(int $id)
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }
        $client = DB::select('SELECT * FROM client inner join client_info where client_id = '.$id.'');

        $notes = DB::select('SELECT * FROM note where client_id = '.$client[0]['id'].'');

        if (!$client) {
            header('Location: /client');
        }
        $this->view('client/clientDetails', ['client' => $client, 'notes' => $notes]);
    }


    /**
     * Undocumented function
     *
     * @return array
     */
    public function addClient()
    {
        $clients = DB::select('select * from client order by id desc');

        if ((!empty($_POST))) {
            $erreur = [];

            if (empty($_POST['company_name'])) {
                $erreur['company_name'] = 'Company_name is required';
            }

            if (!$erreur) {
                DB::insert('INSERT INTO `client` (`company_name`, `created_by`) VALUES (:company_name, :created_by)', [
                  'company_name' => htmlspecialchars($_POST['company_name']),
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
    public function deleteClient(int $id)
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        $test= DB::delete('delete from client where id = ?', [$id]);

        header('Location: /client/clientList');
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

        $clientID = DB::select('select client_id from note where id = ?', [$id]);

        $test= DB::delete('delete from note where id = ?', [$id]);

        header('Location: /client/detailsClient/'. $clientID[0]['client_id']);
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function disableClient($id)
    {
        DB::update('update client set active = 0 where id = '.$id.'');
        header('Location: /client/clientList');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function enableClient($id)
    {
        DB::update('update client set active = 1 where id = '.$id.'');
        header('Location: /client/clientList');
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editNote($id)
    {
        $note = DB::select('select * from note where id = '.$id.'');

        if ((!empty($_POST))) {
            $erreur = [];

            if (empty($_POST['title'])) {
                $erreur['title'] = 'Title name is required';
            }

            if (empty($_POST['content'])) {
                $erreur['content'] = 'Content name is required';
            }

            if (!$erreur) {
                DB::update('update client set company_name = :company_name where id = :id', [
                  'company_name' => htmlspecialchars($_POST['company_name']),
                  'id' => $id
                ]);

                DB::update('update client_info set contact_name = :contact_name, fax = :fax, phone = :phone, address = :address, mail = :mail where client_id = :id', [
                  'contact_name' => htmlspecialchars($_POST['contact_name']),
                  'fax' => htmlspecialchars($_POST['fax']),
                  'phone' => htmlspecialchars($_POST['phone']),
                  'address' => htmlspecialchars($_POST['address']),
                  'mail' => htmlspecialchars($_POST['mail']),
                  'id' => $id
                ]);
      
                header('Location: /client/clientList/'.$id.'');
            }

            $this->view('client/clientEdit/'.$id.'', ['erreur' => $erreur, 'client' => $client, 'clientInfos' => $clientInfo]);
        }
        $this->view('client/clientEdit', ['client' => $client, 'clientInfos' => $clientInfo]);
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function editClient($id)
    {
        $client = DB::select('select * from client where id = '.$id.'');
        $clientInfo = DB::select('select * from client_info where client_id = '.$id.'');

        if ((!empty($_POST))) {
            $erreur = [];

            if (empty($_POST['company_name'])) {
                $erreur['company_name'] = 'Compagny name is required';
            }

            if (empty($_POST['contact_name'])) {
                $erreur['contact_name'] = 'Contact name is required';
            }

            if (empty($_POST['fax'])) {
                $erreur['fax'] = 'Fax is required';
            }

            if (empty($_POST['phone'])) {
                $erreur['phone'] = 'Phone is required';
            }

            if (empty($_POST['address'])) {
                $erreur['address'] = 'Address is required';
            }

            if (empty($_POST['mail'])) {
                $erreur['mail'] = 'Mail is required';
            }

            if (!$erreur) {
                DB::update('update client set company_name = :company_name where id = :id', [
                  'company_name' => htmlspecialchars($_POST['company_name']),
                  'id' => $id
                ]);

                DB::update('update client_info set contact_name = :contact_name, fax = :fax, phone = :phone, address = :address, mail = :mail where client_id = :id', [
                  'contact_name' => htmlspecialchars($_POST['contact_name']),
                  'fax' => htmlspecialchars($_POST['fax']),
                  'phone' => htmlspecialchars($_POST['phone']),
                  'address' => htmlspecialchars($_POST['address']),
                  'mail' => htmlspecialchars($_POST['mail']),
                  'id' => $id
                ]);
      
                header('Location: /client/clientList/'.$id.'');
            }

            $this->view('client/clientEdit/'.$id.'', ['erreur' => $erreur, 'client' => $client, 'clientInfos' => $clientInfo]);
        }
        $this->view('client/clientEdit', ['client' => $client, 'clientInfos' => $clientInfo]);
    }
}
