<?php
class BDD
{
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $bdd;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function getmybdd()
    {
        try {
            if ($this->bdd === null) {
                $this->bdd = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . '', $this->username, $this->password);
            }
        } catch (PDOException $e) {
            print "Erreur ! Connection à la base de donné impossible" . $e->getMessage() . " <br/>";
            die();
        }
        return $this->bdd;
    }
}