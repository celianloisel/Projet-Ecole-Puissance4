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

    public function selectMessage($myTable)
    {
        $sql = 'SELECT message, pseudo, date, CASE WHEN user_id = 4 THEN TRUE ELSE FALSE END AS SENDER FROM ' . $myTable . ' INNER JOIN users ON messages.user_id = users.id WHERE date > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY date ASC';
        $req = $this->bdd->prepare($sql);
        $req->execute();

        $result = $req->fetchAll();

        foreach ($result as $row) {
            if ($row['SENDER'] == true) {
                echo '<div class="send"><p>Moi</p><div class="bull"><p>' . $row['message'] . '</p></div><p>' . $row['date'] . '</p></div>';
            } else {
                echo '<div class="reçu"><div class="text"><p>' . $row['pseudo'] . '</p></div><div><img src="./assets/images/chat/png-clipart-computer-icons-person-name-miscellaneous-computer-wallpaper.png" alt="img"><div class="bull"><p>' . $row['message'] . '</p></div></div><div class="text"><p>' . $row['date'] . '</p></div></div>';
            }
        }
    }

    public function insertMessage($myTable, $myMessage)
    {
        $sql = 'INSERT INTO ' . $myTable . ' (game_id, user_id, message, date) VALUES (1, 4, "' . $myMessage . '", NOW())';

        $req = $this->bdd->prepare($sql);
        $req->execute();
    }
}
