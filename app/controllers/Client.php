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
        $this->view('client/clientList', ['clients' => $clients]);
    }
}
