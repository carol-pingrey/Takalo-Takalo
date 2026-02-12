<?php
class UserRepository {
  private $pdo;
  public function __construct(PDO $pdo) { $this->pdo = $pdo; }

  public function emailExists($email) {
    $st = $this->pdo->prepare("SELECT 1 FROM users WHERE email=? LIMIT 1");
    $st->execute([(string)$email]);
    return (bool)$st->fetchColumn();
  }

  public function getByPrenom($prenom) {
      $st = $this->pdo->prepare("SELECT * FROM users WHERE prenom = ? LIMIT 1");
      $st->execute([(string)$prenom]);
      return $st->fetch(PDO::FETCH_ASSOC);
  }

  public function getByEmail($email) {
      $st = $this->pdo->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
      $st->execute([(string)$email]);
      return $st->fetch(PDO::FETCH_ASSOC);
  }

  public function create($nom, $prenom, $email, $hash, $telephone) {
    $st = $this->pdo->prepare("
      INSERT INTO users(nom, prenom, email, password_hash, telephone)
      VALUES(?,?,?,?,?)
    ");
    $st->execute([(string)$nom, (string)$prenom, (string)$email, (string)$hash, (string)$telephone]);
    return $this->pdo->lastInsertId();
  }
}
