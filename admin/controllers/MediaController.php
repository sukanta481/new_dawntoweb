<?php
class MediaController {
  public static function library(PDO $pdo) {
    try{
      return $pdo->query("SELECT id, filename, mime, size, created_at FROM media ORDER BY id DESC")->fetchAll();
    } catch(Exception $e){ return []; }
  }
}
