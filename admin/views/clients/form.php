<?php require_role(['admin','staff']); ?>
<div class="card">
  <h3>New Client</h3>
  <form method="post">
    <div class="field"><label>Name</label><input class="input" name="name" required></div>
    <div class="field"><label>Email</label><input class="input" type="email" name="email" required></div>
    <div class="field"><label>Temp Password</label><input class="input" type="text" name="password" required></div>
    <button class="btn-primary" type="submit">Create</button>
  </form>
  <?php
    if ($_SERVER['REQUEST_METHOD']==='POST'){
      require_once __DIR__ . '/../../controllers/ClientsController.php';
      if (ClientsController::create($pdo, $_POST)){
        echo '<p class="muted">Client created.</p>';
      } else {
        echo '<p class="muted">Failed to create client.</p>';
      }
    }
  ?>
</div>
