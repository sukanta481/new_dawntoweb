<?php
require __DIR__.'/config.php';
require __DIR__.'/helpers.php';
method_must_be('POST');
$data = json_body();
require_fields($data, ['name','email','message']);
$email = sanitize_email($data['email']);
if (!$email) { http_response_code(422); echo json_encode(['ok'=>false,'error'=>'Invalid email']); exit; }
$name = trim($data['name']);
$phone = isset($data['phone']) ? trim($data['phone']) : '';
$message = trim($data['message']);
$stmt = $pdo->prepare("INSERT INTO contact_leads (name,email,phone,message) VALUES (?,?,?,?)");
$stmt->execute([$name, $email, $phone, $message]);
echo json_encode(['ok'=>true,'message'=>'Saved']);
