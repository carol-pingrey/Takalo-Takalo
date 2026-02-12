<?php

class messageModel
{
    private $pdo;
    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    public function getMessages(){
        $st = $this->pdo->prepare("SELECT * FROM messagerie");
        $st->execute();
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertMessages($idUser1, $message) {
        $st = $this->pdo->prepare("INSERT INTO messagerie (id_user1, messages) VALUES (?, ?)");
        $success = $st->execute([$idUser1, $message]);
    }

}