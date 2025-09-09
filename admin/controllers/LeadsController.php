<?php
class LeadsController {
  public static function all(PDO $pdo) {
    try{
      return $pdo->query("SELECT id, name, email, status, created_at FROM leads ORDER BY id DESC")->fetchAll();
    } catch(Exception $e){ return []; }
  }
}
