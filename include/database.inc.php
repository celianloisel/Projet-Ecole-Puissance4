<?php

session_start();

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

    public function addUser($myTable, $_email, $_passwordbdd, $_pseudo)
    {
        $sql = 'SELECT * FROM ' . $myTable . ' WHERE pseudo = "' . $_pseudo . '" OR email = "' . $_email . '"';
        $req = $this->bdd->prepare($sql);
        $req->execute();

        $count = $req->rowCount();

        if ($count > 0) {
            echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">pseudo ou l\'email est déjà utilisé</p>';
        } else {
            // $mdp_hash = password_hash($_passwordbdd, PASSWORD_DEFAULT);
            $sql2 = 'INSERT INTO ' . $myTable . ' (email, pasword, pseudo, date_inscription) VALUES ("' . $_email . '", "' . $_passwordbdd . '", "' . $_pseudo . '", NOW())';
            $req2 = $this->bdd->prepare($sql2);
            $req2->execute();

            header("Refresh:0; url=login.php");
        }
    }

    public function getLogin($myTable, $myEmail, $myPwd)
    {
        $sql = 'SELECT * FROM ' . $myTable . ' WHERE pasword = ' . $myPwd . ' AND email = "' . $myEmail . '"';

        $req = $this->bdd->prepare($sql);
        $req->execute();

        $result = $req->fetchAll();
        $count = $req->rowCount();

        date_default_timezone_set('Europe/Paris');

        if ($count > 0) {
            foreach ($result as $row) {

                $_SESSION['user_id'] = $row['id'];
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['date'] = date('Y-m-d H:i:s');

                header("Refresh:0; url=myaccount.php");
            }
        } else {
            echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Mot de passe ou email invalide</p>';
        }
    }

    public function selectMessage($myTable)
    {
        $sql = 'SELECT message, pseudo, date, CASE WHEN user_id = ' . $_SESSION['user_id'] . ' THEN TRUE ELSE FALSE END AS SENDER FROM ' . $myTable . ' INNER JOIN users ON messages.user_id = users.id WHERE date > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY date ASC';
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
