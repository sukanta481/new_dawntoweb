<?php
require __DIR__.'/config.php';
require __DIR__.'/helpers.php';
method_must_be('POST');
$data = json_body();
require_fields($data, ['name','email','password']);
$email = sanitize_email($data['email']);
if (!$email) { http_response_code(422); echo json_encode(['ok'=>false,'error'=>'Invalid email']); exit; }
$hash = password_hash($data['password'], PASSWORD_DEFAULT);
try {
  $stmt = $pdo->prepare("INSERT INTO users (name,email,password_hash,role) VALUES (?,?,?, 'client')");
  $stmt->execute([trim($data['name']), $email, $hash]);
  echo json_encode(['ok'=>true]);
} catch (PDOException $e) {
  if ($e->getCode() == '23000') { http_response_code(409); echo json_encode(['ok'=>false,'error'=>'Email already registered']); }
  else { http_response_code(500); echo json_encode(['ok'=>false,'error'=>'Registration failed']); }
}
