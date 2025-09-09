<?php
class SettingsController {
  public static function general(PDO $pdo) {
    // TODO: load from settings table
    return ['site_name' => 'dawntoweb', 'support_email' => 'support@example.com'];
  }
}
