(function(){
  document.querySelectorAll('.gitem svg').forEach(function(s){ s.setAttribute('preserveAspectRatio','xMidYMid slice'); });

  // --- header shadow ---
  var hdr = document.getElementById('hdr');
  var onScroll = function(){ hdr.classList.toggle('stuck', window.scrollY > 8); };
  onScroll();
  window.addEventListener('scroll', onScroll, {passive:true});

  // --- mobile nav ---
  var burger = document.getElementById('burger');
  var nav = document.getElementById('nav');
  burger.addEventListener('click', function(){
    var open = burger.getAttribute('aria-expanded') === 'true';
    burger.setAttribute('aria-expanded', String(!open));
    burger.setAttribute('aria-label', open ? 'メニューを開く' : 'メニューを閉じる');
    nav.classList.toggle('open', !open);
  });
  nav.addEventListener('click', function(e){
    if(e.target.closest('a')){
      nav.classList.remove('open');
      burger.setAttribute('aria-expanded','false');
    }
  });

  // --- schedule tabs ---
  var tabs = [
    {tab: document.getElementById('tab-w'), panel: document.getElementById('panel-w')},
    {tab: document.getElementById('tab-h'), panel: document.getElementById('panel-h')}
  ];
  tabs.forEach(function(t, i){
    t.tab.addEventListener('click', function(){
      tabs.forEach(function(o, j){
        var on = i === j;
        o.tab.setAttribute('aria-selected', String(on));
        o.panel.hidden = !on;
        if(on) o.panel.classList.add('in');
      });
    });
    t.tab.addEventListener('keydown', function(e){
      if(e.key === 'ArrowRight' || e.key === 'ArrowLeft'){
        e.preventDefault();
        tabs[(i + 1) % tabs.length].tab.focus();
        tabs[(i + 1) % tabs.length].tab.click();
      }
    });
  });

  // --- reveal ---
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var items = document.querySelectorAll('.rv');
  if(reduce || !('IntersectionObserver' in window)){
    items.forEach(function(el){ el.classList.add('in'); });
  } else {
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting){ en.target.classList.add('in'); io.unobserve(en.target); }
      });
    }, {rootMargin:'0px 0px -8% 0px', threshold:0.08});
    items.forEach(function(el, i){
      el.style.transitionDelay = Math.min(i % 4, 3) * 70 + 'ms';
      io.observe(el);
    });
  }
})();
