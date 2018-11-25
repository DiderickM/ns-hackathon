self.addEventListener('install', function(event) {
  // Perform install steps
var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/',
  'main.css',
  'main.js',
  '/LOGIN/index.php',
  '/LOGIN/login.php',
    'https://herkansen.nl',
    'images/homescreen48',
    'images/homescreen92',
    'images/homescreen144',
    'images/homescreen168',
    'images/homescreen192',
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});
