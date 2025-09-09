<?php
require __DIR__ . '/../includes/init.php';
require __DIR__ . '/../includes/admin_auth.php';
require_admin(); // any of admin/staff/sales

$AU = admin_user();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Admin Dashboard — dawntoweb</title>
  <link rel="stylesheet" href="<?= asset('css/main.css') ?>"/>
  <style>
    body{background:#f6f8fb}
    .container{max-width:1200px;margin:18px auto;padding:0 16px}
    .card{background:#fff;border:1px solid #e6e9ef;border-radius:12px;padding:16px}
    .grid{display:grid;grid-template-columns:repeat(12,1fr);gap:16px}
    .metric{grid-column:span 3}
    @media (max-width: 900px){ .metric{grid-column:span 6} }
    @media (max-width: 600px){ .metric{grid-column:span 12} }
  </style>
</head>
<body>
  <?php include __DIR__ . '/partials/topbar.php'; ?>
  <main class="container">
    <h1 style="margin-bottom:12px">Welcome, <?= htmlspecialchars($AU['name']) ?></h1>
    <div class="grid">
      <div class="card metric"><strong>Users</strong><div id="m-users" class="muted">—</div></div>
      <div class="card metric"><strong>Clients</strong><div id="m-clients" class="muted">—</div></div>
      <div class="card metric"><strong>Campaigns</strong><div id="m-campaigns" class="muted">—</div></div>
      <div class="card metric"><strong>Leads</strong><div id="m-leads" class="muted">—</div></div>
    </div>

    <div class="card" style="margin-top:16px">
      <strong>Next steps</strong>
      <ol style="margin:8px 0 0 16px">
        <li>Users CRUD (create teammates, set roles)</li>
        <li>Clients CRUD + map users to clients</li>
        <li>Upload reports → parse → metrics_daily</li>
        <li>CMS Pages & Blog</li>
      </ol>
    </div>
  </main>

  <script>
  // Quick counts to show the plumbing works
  (async () => {
    try{
      const res = await fetch('stats.php', {credentials:'same-origin'});
      const s = await res.json();
      for (const k of ['users','clients','campaigns','leads']) {
        const el = document.getElementById('m-'+k);
        if (el) el.textContent = (s[k] ?? 0);
      }
    }catch(e){}
  })();
  </script>
</body>
</html>
