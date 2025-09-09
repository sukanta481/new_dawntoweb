<?php require_role(['admin','staff']); ?>
<div class="card">
  <h3>Media Library</h3>
  <p class="muted">Wire to your storage (local / S3) here.</p>
  <div style="display:grid;grid-template-columns:repeat(6,1fr);gap:8px">
    <div class="card" style="height:100px;display:grid;place-items:center">+</div>
    <div class="card" style="height:100px;display:grid;place-items:center">+</div>
    <div class="card" style="height:100px;display:grid;place-items:center">+</div>
  </div>
</div>
