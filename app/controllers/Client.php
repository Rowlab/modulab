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
     * @param integer $id
     * @return array
     */
    public function detailsClient(int $id)
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /admin/connexion');
        }

        $client = DB::select('SELECT * FROM client inner join client_info where id = '.$id.'');
        if (!$client) {
            header('Location: /client');
        }

        $this->view('client/clientDetails', ['client' => $client]);
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
  
                DB::insert('INSERT INTO `client_info` (`client_id`) VALUES (:client_id)', [
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

        DB::delete('delete from client where id = ?', [$id]);

        header('Location: /client/clientList');
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
