<?php
$AU = admin_user();
?>
<header style="position:sticky;top:0;z-index:50;background:#fff;border-bottom:1px solid #e6e9ef">
  <div style="max-width:1200px;margin:0 auto;height:56px;display:flex;align-items:center;gap:12px;padding:0 16px">
    <div style="display:flex;align-items:center;gap:10px">
      <div style="width:26px;height:26px;border-radius:6px;background:linear-gradient(180deg,#2b57ff,#183a95);display:grid;place-items:center;color:#fff">
        <svg width="14" height="14" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20h16v2H2V2h2zM7 9h2v9H7zm4-4h2v13h-2zm4 6h2v7h-2z"/></svg>
      </div>
      <div style="font-weight:800">Admin</div>
      <nav style="display:flex;gap:6px;margin-left:8px;flex-wrap:wrap">
        <a href="<?= url('admin/index.php') ?>" style="padding:8px 12px;border-radius:10px;text-decoration:none;color:#1f2a44;background:#eef3ff">Dashboard</a>
        <a href="<?= url('admin/users.php') ?>" style="padding:8px 12px;border-radius:10px;text-decoration:none;color:#1f2a44">Users</a>
        <a href="<?= url('admin/clients.php') ?>" style="padding:8px 12px;border-radius:10px;text-decoration:none;color:#1f2a44">Clients</a>
        <a href="<?= url('admin/reports.php') ?>" style="padding:8px 12px;border-radius:10px;text-decoration:none;color:#1f2a44">Reports</a>
        <a href="<?= url('admin/posts.php') ?>" style="padding:8px 12px;border-radius:10px;text-decoration:none;color:#1f2a44">Blog</a>
      </nav>
    </div>
    <div style="margin-left:auto;display:flex;align-items:center;gap:10px">
      <span style="color:#6b7280;font-size:14px"><?= htmlspecialchars($AU['name'] ?? '') ?> (<?= htmlspecialchars($AU['role'] ?? '') ?>)</span>
      <a href="<?= url('admin/logout.php') ?>" style="padding:8px 12px;border:1px solid #e6e9ef;border-radius:10px;text-decoration:none">Logout</a>
    </div>
  </div>
</header>
