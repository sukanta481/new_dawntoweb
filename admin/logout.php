<?php
require __DIR__ . '/../includes/init.php';
require __DIR__ . '/../includes/admin_auth.php';
admin_logout();
header('Location: ' . url('admin/login.php'));
exit;
