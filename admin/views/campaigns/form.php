<?php require_role(['admin','staff']); ?>
<div class="card">
  <h3>New Campaign</h3>
  <p class="muted">Connect to FB/Google API or your ingestion pipeline here.</p>
  <form>
    <div class="field"><label>Name</label><input class="input"></div>
    <div class="field"><label>Channel</label><input class="input" placeholder="Google / Meta / LinkedIn"></div>
    <div class="field"><label>Budget</label><input class="input" type="number"></div>
    <button class="btn-primary" type="button">Save</button>
  </form>
</div>
