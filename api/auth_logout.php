<?php
require __DIR__ . '/../includes/init.php';
logout_client();
header('Location: ' . url('pages/login.php') . '?m=' . urlencode('You have been logged out.'));
exit;
?>
