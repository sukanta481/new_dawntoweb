<aside class="admin-sidebar" id="admin-sidebar">
  <nav class="nav">
    <?php
      $m = $_GET['m'] ?? 'dashboard';
      function nav($id,$label,$icon=''){
        $active = ($GLOBALS['m'] ?? '') === $id ? 'active' : '';
        $url = admin_url('index.php?m='.$id);
        echo "<a class='$active' href='$url'>".($icon?"<span>$icon</span>":"")."$label</a>";
      }
    ?>
    <?php nav('dashboard','Dashboard','📊'); ?>
    <?php nav('clients','Clients','👥'); ?>
    <?php nav('campaigns','Campaigns','🎯'); ?>
    <?php nav('ingest','Data Ingestion','⤴️'); ?>
    <?php nav('ingest-log','Ingestion History','🧾'); ?>
    <?php nav('reports','Reports & Insights','📈'); ?>
    <?php nav('leads','Leads','💬'); ?>
    <?php nav('content-p','Pages','📄'); ?>
    <?php nav('content-b','Blog Posts','✍️'); ?>
    <?php nav('media','Media Library','🖼'); ?>
    <?php nav('settings','Settings','⚙️'); ?>
  </nav>
</aside>
