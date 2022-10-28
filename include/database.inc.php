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
            $mdp_hash = password_hash($_passwordbdd, PASSWORD_DEFAULT);
            $sql2 = 'INSERT INTO ' . $myTable . ' (email, pasword, pseudo, date_inscription) VALUES ("' . $_email . '", "' . $mdp_hash . '", "' . $_pseudo . '", NOW())';
            $req2 = $this->bdd->prepare($sql2);
            $req2->execute();

            header("Refresh:0; url=login.php");
        }
    }

    public function getLogin($myTable, $myEmail, $myPwd)
    {
        $hash = 'SELECT * FROM ' . $myTable . ' WHERE email = "' . $myEmail . '"';
        $req = $this->bdd->prepare($hash);
        $req->execute();

        $result = $req->fetchAll();

        $mdp = null;

        foreach ($result as $row) {
            $mdp = $row['pasword'];
        }

        if (password_verify($myPwd, $mdp)) {

            $count = $req->rowCount();

            date_default_timezone_set('Europe/Paris');

            if ($count > 0) {
                foreach ($result as $row) {

                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['pseudo'] = $row['pseudo'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['date'] = date('Y-m-d H:i:s');

                    $sql = 'UPDATE ' . $myTable . ' SET date_last_connexion = NOW() WHERE email = "' . $myEmail . '"';
                    $req2 = $this->bdd->prepare($sql);
                    $req2->execute();

                    header("Refresh:0; url=myaccount.php");
                }
            } else {
                echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Email ou mot de passe invalide</p>';
            }
        } else {
            echo 'Le mot de passe est invalide.';
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
        $sql = 'INSERT INTO ' . $myTable . ' (game_id, user_id, message, date) VALUES (1, ' . $_SESSION['user_id'] . ', "' . $myMessage . '", NOW())';

        $req = $this->bdd->prepare($sql);
        $req->execute();
    }

    public function genScores($myTable, $mySorting, $myOnlyMe)
    {

        if (isset($mySorting)) {
            $sortingScores = $mySorting;
        } else {
            $sortingScores = "date";
        }


        if (isset($myOnlyMe)) {
            $sql = 'SELECT * FROM ' . $myTable . ' INNER JOIN users ON scores.user_id = users.id INNER JOIN games ON scores.game_id = games.id WHERE user_id=' . $_SESSION['user_id'] . '  ORDER BY ' . $sortingScores . ' DESC';
        } else {
            $sql = 'SELECT * FROM ' . $myTable . ' INNER JOIN users ON scores.user_id = users.id INNER JOIN games ON scores.game_id = games.id  ORDER BY ' . $sortingScores . ' DESC';
        }

        $req = $this->bdd->prepare($sql);
        $req->execute();
        $result = $req->fetchAll();

        foreach ($result as $row) {
            echo '<tr>
                    <th> ' . $row["game"] . ' </th>
                    <th> ' . $row["difficulty"] . ' </th>
                    <th> ' . $row["pseudo"] . ' </th>
                    <th> ' . $row["score"] . ' </th>
                    <th> ' . $row["date"] . ' </th>
                </tr>';
        }
    }

    public function genPlayTotal($myTable){
        $sql = "SELECT * FROM scores INNER JOIN users ON scores.user_id = users.id INNER JOIN games ON scores.game_id = games.id";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $PlayTotal = $req->rowCount();

        echo $PlayTotal;
    }

    public function genRegisteredTotal($myTable){
        $sql = "SELECT * FROM users";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $registeredTotal = $req->rowCount();

        echo $registeredTotal;
    }

    public function genMaxScore($myTable){
        $sql = "SELECT MAX(score) FROM scores";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $maxScore = $req->fetch();
        $finalMax = $maxScore[0];
        echo $finalMax;
    }
}
