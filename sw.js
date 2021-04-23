const cacheName = 'news-v1';
const staticAssets = [
  // './',
  './index.php',
  './.htaccess',
  './admin.php',
  './index.js',
  './app.js',
  './batsman-refresh.php',
  './bowler-refresh.php',
  './dashboard.php',
  './header-comment.php',
  './left-score.php',
  './right-score.php',
  './live.php',
  './logout.php',
  './point-table.php',
  './script.js',
  './style.css',
  './terms.php',
  './test.php',
  './css/bootstrap.min.css',
  './css/custom.css',
  './css/font-awesome.min.css',
  './css/jquery.min.js',
  './css/pace-theme.css',
  './css/pace.js',
  './img/dash.svg',
  './img/log.svg',
  './img/register.svg',
  './img/vs.png',
  './img/teams/bangalore.png',
  './img/teams/chennai.png',
  './img/teams/delhi.png',
  './img/teams/hyderabad.png',
  './img/teams/kolkata.png',
  './img/teams/punjab.jpg',
  './img/teams/mumbai.png',
  './img/teams/rajasthan.png',
  './Include/ClientLogout.php',
  './Include/Database.php',
  './Include/Date_Time.php',
  './Include/functions.php',
  './Include/Logout.php',
  './Include/Sessions.php',
  './Include/signup.php',
  './Include/style.css',
  './includes/footer.php',
  './includes/header.php',
  './includes/simple_html_dom.php',
  './query.php',
  './PaytmKit/pgRedirect.php',
  './PaytmKit/pgResponse.php',
  './PaytmKit/TxnStatus.php',
  './PaytmKit/lib/config_paytm.php',
  './PaytmKit/lib/encdec_paytm.php'
];

self.addEventListener('install', async e => {
  const cache = await caches.open(cacheName);
  await cache.addAll(staticAssets);
  return self.skipWaiting();
});

self.addEventListener('activate', e => {
  self.clients.claim();
});

self.addEventListener('fetch', async e => {
  const req = e.request;
  const url = new URL(req.url);

  if (url.origin === location.origin) {
    e.respondWith(cacheFirst(req));
  } else {
    e.respondWith(networkAndCache(req));
  }
});

async function cacheFirst(req) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req);
}

async function networkAndCache(req) {
  const cache = await caches.open(cacheName);
  try {
    const fresh = await fetch(req);
    await cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    return cached;
  }
}
