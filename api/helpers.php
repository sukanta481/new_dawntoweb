<?php
function json_body() {
  $raw = file_get_contents('php://input');
  if ($raw) {
    $data = json_decode($raw, true);
    if (json_last_error() === JSON_ERROR_NONE && is_array($data)) {
      return $data;
    }
  }
  if (!empty($_POST)) return $_POST;
  return [];
}
function require_fields($data, $fields) {
  foreach ($fields as $f) {
    if (!isset($data[$f]) || trim($data[$f]) === '') {
      http_response_code(422);
      echo json_encode(['ok'=>false,'error'=>"Missing field: $f"]);
      exit;
    }
  }
}
function sanitize_email($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;
}
function method_must_be($method) {
  if (strtoupper($_SERVER['REQUEST_METHOD'] ?? '') !== strtoupper($method)) {
    http_response_code(405);
    echo json_encode(['ok'=>false,'error'=>"Method not allowed, use $method"]);
    exit;
  }
}
