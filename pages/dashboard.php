<?php
require __DIR__ . '/../includes/init.php';
require_client();
$activeTab = 'overview';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Campaign Overview — dawntoweb</title>

  <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
  <link rel="stylesheet" href="<?= asset('css/mc-dashboard.css?v=3') ?>">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</head>
<body class="dash-body">
  <?php
$userName = $_SESSION['user']['name'] ?? 'User';
$userPhoto = $_SESSION['user']['photo'] ?? asset('images/default-avatar.png');
?>
<div class="topbar">
  <div class="topbar-left">
    👋 Welcome, <?= htmlspecialchars($userName) ?>
  </div>
  <div class="topbar-right">
    <div class="profile-menu">
      <img src="<?= $userPhoto ?>" alt="Profile" class="avatar">
      <div class="dropdown">
        <a href="settings.php">⚙️ Settings</a>
        <a href="../api/logout.php">🚪 Logout</a>
      </div>
    </div>
  </div>
</div>



  <?php include __DIR__ . '/../partials/header_dashboard.php'; ?>

  <main class="container">
    <!-- Filters bar -->
    <section class="panel filters">
      <div class="filters__grid">
        <div>
          <div class="label">Campaign Selection</div>
          <button class="select" id="f-campaign">All Campaigns ▾</button>
        </div>
        <div>
          <div class="label">Date Range</div>
          <button class="select" id="f-range">Last 7 days ▾</button>
        </div>
        <div class="filters__right">
          <label class="switch">
            <input type="checkbox" id="auto-refresh">
            <span class="switch__slider"></span>
          </label>
          <div class="muted sm">Auto Refresh<br/><span>Every 15min</span></div>
          <div class="muted sm" id="last-updated">Last Updated<br/><span>0s ago</span></div>
          <button class="btn-ghost" id="btn-refresh">⟳ Refresh</button>
          <div class="dot dot--live"></div><span class="muted">Live</span>
        </div>
      </div>
    </section>

    <!-- KPIs -->
    <section class="kpis">
      <div class="kpi">
        <div class="kpi__icon">$</div>
        <div class="kpi__value" id="kpi-spend">$0</div>
        <div class="kpi__meta">
          <span class="kpi__title">Total Spend</span>
          <span class="delta up" id="kpi-spend-delta">+0%</span>
        </div>
      </div>
      <div class="kpi">
        <div class="kpi__icon">📈</div>
        <div class="kpi__value" id="kpi-roas">0.0x</div>
        <div class="kpi__meta">
          <span class="kpi__title">Overall ROAS</span>
          <span class="delta up" id="kpi-roas-delta">+0%</span>
        </div>
      </div>
      <div class="kpi">
        <div class="kpi__icon">🖱</div>
        <div class="kpi__value" id="kpi-ctr">0%</div>
        <div class="kpi__meta">
          <span class="kpi__title">Average CTR</span>
          <span class="delta down" id="kpi-ctr-delta">-0%</span>
        </div>
      </div>
      <div class="kpi">
        <div class="kpi__icon">🎯</div>
        <div class="kpi__value" id="kpi-active">0</div>
        <div class="kpi__meta">
          <span class="kpi__title">Active Campaigns</span>
          <span class="delta up" id="kpi-active-delta">+0</span>
        </div>
      </div>
    </section>

    <!-- Trend + right rail -->
    <section class="grid-3">
      <div class="panel lg">
        <div class="panel__head">
          <h3>Daily Spend vs ROAS Trends</h3>
          <div class="legend"><span class="key key--bar"></span>Daily Spend <span class="key key--line"></span>ROAS</div>
        </div>
        <canvas id="spendRoasChart" height="120"></canvas>
      </div>

      <div class="rail">
        <div class="panel">
          <div class="panel__head">
            <h3>Campaign Health</h3>
            <div class="dot dot--live"></div><span class="muted">Live</span>
          </div>
          <div id="health-list" class="list list--health"></div>
          <a class="panel__link" href="#">View all alerts (3)</a>
        </div>

        <div class="panel">
          <div class="panel__head">
            <h3>Budget Burn Rate</h3>
            <span>💲</span>
          </div>
          <div id="burn-list" class="list list--burn"></div>
          <div class="muted sm" id="burn-total">Total Budget Utilization — 0%</div>
        </div>
      </div>
    </section>

    <!-- Top lists -->
    <section class="grid-2">
      <div class="panel">
        <div class="panel__head"><h3>Top Performing</h3><span>🏅</span></div>
        <div id="top-list" class="list list--cards"></div>
        <a class="panel__link" href="#">View all campaigns</a>
      </div>
      <div class="panel">
        <div class="panel__head"><h3>Needs Attention</h3><span>⚠️</span></div>
        <div id="needs-list" class="list list--cards"></div>
        <a class="panel__link" href="#">View all campaigns</a>
      </div>
    </section>

    <!-- Performance table -->
    <section class="panel">
      <div class="panel__head">
        <h3>Campaign Performance</h3>
        <div class="panel__actions">
          <button class="btn-ghost" id="btn-export">⇩ Export</button>
          <button class="btn-ghost" id="btn-refresh2">⟳ Refresh</button>
        </div>
      </div>

      <div class="table-wrap">
        <table class="table" id="perf-table">
          <thead>
            <tr>
              <th data-sort="campaign">Campaign</th>
              <th data-sort="status">Status</th>
              <th data-sort="spend">Spend</th>
              <th data-sort="impressions">Impressions</th>
              <th data-sort="clicks">Clicks</th>
              <th data-sort="ctr">CTR</th>
              <th data-sort="roas">ROAS</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="perf-body"></tbody>
        </table>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/../partials/footer_dashboard.php'; ?>

  <script defer src="<?= asset('js/mc-dashboard.js?v=3') ?>"></script>

  <script>
  const profileBtn = document.getElementById("profile-btn");
  const dropdown = document.getElementById("profile-dropdown");

  profileBtn.addEventListener("click", () => {
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  });

  document.addEventListener("click", (e) => {
    if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.style.display = "none";
    }
  });
</script>


</body>
</html>
