<?php require_role(['admin','staff','sales']); ?>
<div class="card">
  <h3>Reports & Insights</h3>
  <table class="table">
    <thead><tr><th>ID</th><th>Client</th><th>Title</th><th>File</th><th>Uploaded</th></tr></thead>
    <tbody>
      <?php require_once __DIR__ . '/../../controllers/ReportsController.php';
        $rows = ReportsController::list($pdo);
        foreach ($rows as $r): ?>
        <tr>
          <td><?= (int)$r['id'] ?></td>
          <td><?= (int)$r['client_id'] ?></td>
          <td><?= htmlspecialchars($r['title']) ?></td>
          <td><?= htmlspecialchars($r['file_path']) ?></td>
          <td><?= htmlspecialchars($r['created_at']) ?></td>
        </tr>
      <?php endforeach; if (empty($rows)): ?>
        <tr><td class="muted" colspan="5">No documents yet.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
