<?php
class DB extends PDO
{
    const DSN = 'mysql:host=localhost;port=3307;dbname=modulab2';
    const USER = 'root';
    const PASSWORD = 'root';
    
    public function __construct()
    {
        try {
            parent::__construct(self::DSN, self::USER, self::PASSWORD);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return array
     */
    public static function select(string $query, array $params = []) : array
    {
        $bdd = new DB;
        if ($params) {
            $req = $bdd->prepare($query);
            $req->execute($params);
        } else {
            $req = $bdd->query($query);
        }

        $data = $req->fetchAll();
        return $data;
    }
    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return integer
     */
    public static function update(string $query, array $params = []) : int
    {
        $bdd = new DB;

        if ($params) {
            $req = $bdd->prepare($query);
            $req->execute($params);
        } else {
            $req = $bdd->query($query);
        }

        $updated = $req->rowCount();
        return $updated;
    }
    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return integer
     */
    public static function insert(string $query, array $params = []) : int
    {
        $bdd = new DB;

        if ($params) {
            $req = $bdd->prepare($query);
            $req->execute($params);
        } else {
            $req = $bdd->query($query);
        }

        $inserted = $req->rowCount();
        return $inserted;
    }
    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return integer
     */
    public static function delete(string $query, array $params = []) : int
    {
        $bdd = new DB;

        if ($params) {
            $req = $bdd->prepare($query);
            $req->execute($params);
        } else {
            $req = $bdd->query($query);
        }

        $deleted = $req->rowCount();
        return $deleted;
    }
}
