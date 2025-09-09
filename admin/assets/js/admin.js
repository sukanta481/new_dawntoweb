// Mobile sidebar toggle
(function(){
  const btn = document.getElementById('admin-burger');
  const sb  = document.getElementById('admin-sidebar');
  if (!btn || !sb) return;
  btn.addEventListener('click', ()=> {
    const open = sb.classList.toggle('open');
    document.body.classList.toggle('lock', open);
  });
})();

// ----------------------------
// AUTH (Login) interactions
// ----------------------------

// eye toggle for password
(function(){
  const pwd = document.getElementById('pwd');
  const btn = document.getElementById('togglePwd');
  const openIcon = document.getElementById('eyeOpen');
  const closedIcon = document.getElementById('eyeClosed');
  if (!pwd || !btn) return;
  btn.addEventListener('click', () => {
    const showing = pwd.type === 'text';
    pwd.type = showing ? 'password' : 'text';
    if (openIcon)   openIcon.style.display   = showing ? '' : 'none';
    if (closedIcon) closedIcon.style.display = showing ? 'none' : '';
  });
})();

// submit spinner + disable
(function(){
  const form = document.getElementById('auth-form');
  if (!form) return;
  const btn = document.getElementById('btnSubmit');
  const spin = btn?.querySelector('.auth-spin');
  const arrw = btn?.querySelector('.auth-arrow');
  form.addEventListener('submit', () => {
    if (!btn) return;
    btn.disabled = true;
    if (spin) spin.style.display = 'inline-block';
    if (arrw) arrw.style.display = 'none';
  });
})();
