<?php
class CampaignsController {
  public static function all(PDO $pdo) {
    // Example structure table campaigns (id, client_id, name, channel, status, budget)
    if (!$pdo) return [];
    try{
      return $pdo->query("SELECT id, name, channel, status, budget FROM campaigns ORDER BY id DESC")->fetchAll();
    } catch(Exception $e){ return []; }
  }
}
