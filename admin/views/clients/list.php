<?php require_role(['admin','staff']); ?>
<div class="card">
  <div style="display:flex;justify-content:space-between;align-items:center">
    <h3>Clients</h3>
    <a class="logout" href="<?= admin_url('index.php?m=clients&action=new') ?>">New Client</a>
  </div>
  <table class="table">
    <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Status</th><th>Joined</th></tr></thead>
    <tbody>
      <?php
        require_once __DIR__ . '/../../controllers/ClientsController.php';
        $rows = ClientsController::all($pdo);
        foreach ($rows as $r):
      ?>
      <tr>
        <td><?= (int)$r['id'] ?></td>
        <td><?= htmlspecialchars($r['name']) ?></td>
        <td><?= htmlspecialchars($r['email']) ?></td>
        <td><?= htmlspecialchars($r['status']) ?></td>
        <td><?= htmlspecialchars($r['created_at']) ?></td>
      </tr>
      <?php endforeach; if (empty($rows)): ?>
      <tr><td colspan="5" class="muted">No clients yet.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
