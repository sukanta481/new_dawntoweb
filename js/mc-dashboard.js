/* =========================================================
   Dashboard interactions (dropdowns, toggle, tabs, mobile nav)
   ========================================================= */

/* ---- mc-dd dropdowns: open/close + selection + keyboard ---- */
(function(){
  const rootSel = '.mc-dd', btnSel = '.mc-dd-toggle', menuSel = '.mc-dd-menu', itemSel = '.mc-dd-item';

  function closeAll() {
    document.querySelectorAll(rootSel+'.is-open').forEach(dd=>{
      dd.classList.remove('is-open');
      dd.querySelector(btnSel)?.setAttribute('aria-expanded','false');
    });
  }

  function focusItem(menu, idx){
    const items = [...menu.querySelectorAll(itemSel)];
    if (!items.length) return;
    const i = Math.max(0, Math.min(idx, items.length-1));
    items[i].focus();
  }

  document.addEventListener('click', e=>{
    const toggle = e.target.closest(btnSel);
    const dd = e.target.closest(rootSel);
    const item = e.target.closest(itemSel);

    // Toggle clicked
    if (toggle && dd){
      const opened = dd.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', opened ? 'true':'false');
      if (opened) setTimeout(()=> focusItem(dd.querySelector(menuSel), 0), 0);
      e.stopPropagation();
      return;
    }

    // Item selected
    if (item){
      const menu = item.closest(menuSel);
      const root = item.closest(rootSel);
      menu.querySelectorAll(itemSel+'[aria-selected="true"]').forEach(n=>n.removeAttribute('aria-selected'));
      item.setAttribute('aria-selected','true');
      const label = root.querySelector(btnSel+' span');
      if (label) label.textContent = item.textContent.trim();
      root.classList.remove('is-open');
      root.querySelector(btnSel)?.setAttribute('aria-expanded','false');
      return;
    }

    // Clicked outside
    if (!dd) closeAll();
  });

  document.addEventListener('keydown', e=>{
    if (e.key === 'Escape'){ closeAll(); return; }
    const focusedItem = document.activeElement?.closest?.(itemSel);
    if (!focusedItem) return;
    const menu = focusedItem.closest(menuSel);
    const items = [...menu.querySelectorAll(itemSel)];
    const idx = items.indexOf(focusedItem);
    if (e.key === 'ArrowDown'){ e.preventDefault(); focusItem(menu, idx+1); }
    if (e.key === 'ArrowUp'){ e.preventDefault(); focusItem(menu, idx-1); }
    if (e.key === 'Enter'){ focusedItem.click(); }
  });
})();

/* ---- Upgrade the two filter <button class="select"> into real dropdowns ---- */
(function(){
  function makeDropdown(buttonSelector, options){
    const btn = document.querySelector(buttonSelector);
    if (!btn || btn.dataset.enhanced === '1') return;

    // Create wrapper .mc-dd and move the button inside
    const wrap = document.createElement('div');
    wrap.className = 'mc-dd';
    btn.parentNode.insertBefore(wrap, btn);
    wrap.appendChild(btn);

    // Turn the button into the mc-dd toggle
    btn.classList.remove('select');
    btn.classList.add('mc-dd-toggle');
    btn.setAttribute('aria-haspopup','listbox');
    btn.setAttribute('aria-expanded','false');
    btn.innerHTML = `<span>${btn.textContent.replace(/▾/g,'').trim()}</span><span class="mc-caret" aria-hidden="true"></span>`;
    btn.dataset.enhanced = '1';

    // Build the menu
    const menu = document.createElement('div');
    menu.className = 'mc-dd-menu';
    menu.setAttribute('role','listbox');
    menu.setAttribute('aria-label', btn.id === 'f-range' ? 'Date range' : 'Campaigns');

    menu.innerHTML = options.map((txt,i)=>(
      `<div class="mc-dd-item" role="option" ${i===0?'aria-selected="true"':''}>${txt}</div>`
    )).join('');
    wrap.appendChild(menu);
  }

  // Provide sensible defaults
  makeDropdown('#f-campaign', [
    'All Campaigns','Google Ads','Facebook Ads','LinkedIn Ads',
    'YouTube Ads','Twitter Ads'
  ]);

  makeDropdown('#f-range', [
    'Today','Yesterday','Last 7 days','Last 30 days',
    'Last 90 days','This month','Last month'
  ]);
})();

/* ---- Tabs (desktop click = mark active when href is #) ---- */
(function(){
  document.querySelectorAll('.appbar__tabs .tab').forEach(tab=>{
    tab.addEventListener('click', e=>{
      if (tab.getAttribute('href') === '#') e.preventDefault();
      document.querySelectorAll('.appbar__tabs .tab.active').forEach(t=>t.classList.remove('active'));
      tab.classList.add('active');
    });
  });
})();

/* ---- Mobile hamburger & drawer (works for .appbar and .mc-header) ---- */
(function () {
  const isMobile = () => window.matchMedia('(max-width: 768px)').matches;

  function wireNav({ headerSel, tabsSel, btnClass, drawerClass, listClass }) {
    const header = document.querySelector(headerSel);
    const tabs = header?.querySelector(tabsSel);
    if (!header || !tabs) return;

    let btn = null, drawer = null;

    function open() {
      drawer.classList.add('open');
      document.body.classList.add('mc-lock');
    }
    function close() {
      drawer.classList.remove('open');
      document.body.classList.remove('mc-lock');
    }

    function build() {
      if (isMobile()) {
        if (!btn) {
          // hamburger
          btn = document.createElement('button');
          btn.className = btnClass;
          btn.setAttribute('aria-label', 'Open navigation');
          btn.innerHTML = '<span class="bar"></span>';

          const bar = header.querySelector('.appbar__inner') || header;
          const left = bar.querySelector('.appbar__left');
          if (left && left.nextSibling) bar.insertBefore(btn, left.nextSibling); else bar.insertBefore(btn, bar.firstChild);

          // drawer with cloned tabs
          drawer = document.createElement('div');
          drawer.className = drawerClass;
          const list = document.createElement('div');
          list.className = listClass;
          list.innerHTML = tabs.innerHTML;
          drawer.appendChild(list);
          document.body.appendChild(drawer);

          // interactions
          btn.addEventListener('click', () => {
            drawer.classList.contains('open') ? close() : open();
          });
          document.addEventListener('click', (e) => {
            if (!drawer) return;
            if (drawer.classList.contains('open') &&
                !drawer.contains(e.target) &&
                !btn.contains(e.target)) {
              close();
            }
          });
          document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && drawer?.classList.contains('open')) close();
          });
        }
      } else {
        if (drawer) { drawer.remove(); drawer = null; }
        if (btn)    { btn.remove();    btn    = null; }
        document.body.classList.remove('mc-lock');
      }
    }

    build();
    window.addEventListener('resize', build);
  }

  // appbar variant (your header)
  wireNav({
    headerSel: '.appbar',
    tabsSel: '.appbar__tabs',
    btnClass: 'appbar__burger',
    drawerClass: 'appbar-drawer',
    listClass: 'appbar-drawer-list'
  });

  // mc-header variant (supported if you ever switch)
  wireNav({
    headerSel: '.mc-header',
    tabsSel: '.mc-tabs',
    btnClass: 'mc-menu-btn',
    drawerClass: 'mc-nav-drawer',
    listClass: 'mc-nav-list'
  });
})();
