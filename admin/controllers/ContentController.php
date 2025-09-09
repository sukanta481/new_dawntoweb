<?php
class ContentController {
  public static function pages(PDO $pdo)  { try{ return $pdo->query("SELECT id, title, slug, status, updated_at FROM pages ORDER BY updated_at DESC")->fetchAll(); } catch(Exception $e){ return []; } }
  public static function posts(PDO $pdo)  { try{ return $pdo->query("SELECT id, title, slug, status, published_at FROM posts ORDER BY published_at DESC")->fetchAll(); } catch(Exception $e){ return []; } }
}
