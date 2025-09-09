<?php
class ClientsController {
  public static function all(PDO $pdo) {
    // TODO: replace with real query
    return $pdo->query("SELECT id, name, email, status, created_at FROM clients ORDER BY id DESC")->fetchAll();
  }
  public static function create(PDO $pdo, array $d) {
    // TODO: validation + hash password etc.
    $stmt = $pdo->prepare("INSERT INTO clients(name,email,password_hash,status,created_at) VALUES(?,?,?,?,NOW())");
    return $stmt->execute([$d['name'],$d['email'],password_hash($d['password'], PASSWORD_BCRYPT),'active']);
  }
}
