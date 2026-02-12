<?php

class userModel
{
    private $pdo;
    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    public function getUsers(){
        $st = $this->pdo->prepare("SELECT * FROM users");
        $st->execute();
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

}