<?php
class ReportsController {
  public static function list(PDO $pdo) {
    try{
      return $pdo->query("SELECT id, client_id, title, file_path, created_at FROM report_documents ORDER BY id DESC")->fetchAll();
    } catch(Exception $e){ return []; }
  }
}
