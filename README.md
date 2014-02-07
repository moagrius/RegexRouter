RegexRouter
===========

PHP class to route with regular expressions.  Extremely small.  Follows every conceivable best-practice - SRP, SoC, DI, IoC, bfft...

Usage
===========

The only actual code is RegexRouter.php.  index.php and the .htaccess file are just demoing usage.  The 3 together in a TLD will function.

Setup
===========

1.  make sure you're sending all requests to a front controller (either through apache conf directly or htaccess)
1.  include or require RegexRouter.php `require_once 'RegexRouter.php';`
1.  instantiate a new instance `$router = new RegexRouter();`
1.  add some routes `$router->route('/^\/some\/pattern$/', <closure>);`
1.  pass it either REQUEST_URI or any string for unit testing `$router->execute($_SERVER['REQUEST_URI']);`

