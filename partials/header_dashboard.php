<?php
if (!isset($activeTab)) $activeTab = 'overview';
?>
<header class="appbar">
  <div class="appbar__inner">
    <!-- Left: brand -->
    <div class="appbar__left">
      <div class="appbar__logo" aria-hidden="true">
        <svg width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20h16v2H2V2h2zM7 9h2v9H7zm4-4h2v13h-2zm4 6h2v7h-2z"/></svg>
      </div>
      <div class="appbar__brand">
        <div class="brand-title">MarketingCampaign</div>
        <div class="brand-sub">Analytics</div>
      </div>
    </div>

    <!-- Center: desktop tabs -->
    <nav class="appbar__tabs" aria-label="Sections">
      <a href="<?= url('pages/dashboard.php') ?>" class="tab <?= $activeTab==='overview'?'active':'' ?>">
        <span class="tab__icon">📊</span><span>Campaign <br>Overview</span>
      </a>
      <a href="#" class="tab <?= $activeTab==='multichannel'?'active':'' ?>">
        <span class="tab__icon">📈</span><span>Multi-Channel<br>Analytics</span>
      </a>
      <a href="#" class="tab <?= $activeTab==='realtime'?'active':'' ?>">
        <span class="tab__icon">⚡</span><span>Real-Time Monitoring</span>
      </a>
      <a href="#" class="tab <?= $activeTab==='exec'?'active':'' ?>">
        <span class="tab__icon">🧠</span><span>Executive Intelligence</span>
      </a>
    </nav>

    <!-- Right: live dot + specialist dropdown -->
    <div class="appbar__right">
      <span class="dot dot--live" title="Live"></span>
      <span class="toolbar__text">Live</span>

      <div class="mc-dd">
        <button class="mc-dd-toggle" aria-haspopup="listbox" aria-expanded="false">
          <span>Campaign Specialist</span>
          <span class="mc-caret" aria-hidden="true"></span>
        </button>
        <div class="mc-dd-menu" role="listbox" aria-label="Specialists">
          <div class="mc-dd-item" role="option" aria-selected="true">Campaign Specialist</div>
          <div class="mc-dd-item" role="option">Growth Manager</div>
          <div class="mc-dd-item" role="option">Performance Lead</div>
          <div class="mc-dd-item" role="option">Analytics Admin</div>
        </div>
      </div>

      <!-- Mobile hamburger -->
      <button id="navToggle" class="appbar__burger" aria-label="Open navigation" aria-controls="navDrawer" aria-expanded="false">
        <span class="bar"></span>
      </button>
    </div>
  </div>

  <!-- Mobile drawer -->
  <div id="navDrawer" class="appbar-drawer" hidden>
    <nav class="appbar-drawer-list" aria-label="Mobile Sections">
      <a href="<?= url('pages/dashboard.php') ?>" class="<?= $activeTab==='overview'?'active':'' ?>">📊 Campaign Overview</a>
      <a href="#" class="<?= $activeTab==='multichannel'?'active':'' ?>">📈 Multi-Channel Analytics</a>
      <a href="#" class="<?= $activeTab==='realtime'?'active':'' ?>">⚡ Real-Time Monitoring</a>
      <a href="#" class="<?= $activeTab==='exec'?'active':'' ?>">🧠 Executive Intelligence</a>
    </nav>
  </div>
</header>
