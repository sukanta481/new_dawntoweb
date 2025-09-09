<?php require_role(['admin','staff']); ?>
<div class="card">
  <h3>Campaigns</h3>
  <table class="table">
    <thead><tr><th>ID</th><th>Name</th><th>Channel</th><th>Status</th><th>Budget</th></tr></thead>
    <tbody>
      <?php require_once __DIR__ . '/../../controllers/CampaignsController.php';
        $rows = CampaignsController::all($pdo);
        foreach ($rows as $r): ?>
        <tr>
          <td><?= (int)$r['id'] ?></td>
          <td><?= htmlspecialchars($r['name'] ?? '') ?></td>
          <td><?= htmlspecialchars($r['channel'] ?? '') ?></td>
          <td><?= htmlspecialchars($r['status'] ?? '') ?></td>
          <td><?= htmlspecialchars($r['budget'] ?? '') ?></td>
        </tr>
      <?php endforeach; if (empty($rows)): ?>
        <tr><td colspan="5" class="muted">No campaigns found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
