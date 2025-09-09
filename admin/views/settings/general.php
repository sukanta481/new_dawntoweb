<?php require_role(['admin']); ?>
<div class="card">
  <h3>Settings</h3>
  <form method="post">
    <div class="field"><label>Site Name</label><input class="input" name="site_name" value="dawntoweb"></div>
    <div class="field"><label>Support Email</label><input class="input" name="support_email" value="support@example.com"></div>
    <button class="btn-primary" type="submit">Save</button>
  </form>
  <?php if ($_SERVER['REQUEST_METHOD']==='POST') echo '<p class="muted">Saved (stub).</p>'; ?>
</div>
