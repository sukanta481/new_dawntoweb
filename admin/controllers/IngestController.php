<?php
class IngestController {
  public static function upload(PDO $pdo, array $file) {
    // TODO: save file to /storage/reports and queue parse to metrics_daily
    return true;
  }
  public static function history(PDO $pdo) {
    // TODO: return latest 50 ingestions
    return [];
  }
}
