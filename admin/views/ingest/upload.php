<?php require_role(['admin','staff']); ?>
<div class="card">
  <h3>Data Ingestion</h3>
  <form method="post" enctype="multipart/form-data">
    <div class="field">
      <label>Upload CSV/XLSX (ad platform exports)</label>
      <input class="input" type="file" name="file" accept=".csv,.xlsx" required>
    </div>
    <button class="btn-primary" type="submit">Upload & Parse</button>
  </form>
  <?php
    if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_FILES['file'])){
      require_once __DIR__ . '/../../controllers/IngestController.php';
      if (IngestController::upload($pdo, $_FILES['file'])){
        echo '<p class="muted">Upload queued.</p>';
      } else {
        echo '<p class="muted">Upload failed.</p>';
      }
    }
  ?>
</div>
