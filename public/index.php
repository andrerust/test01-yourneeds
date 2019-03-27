<?php

ini_set('memory_limit', '1024M');
ini_set('max_execution_time', '300');
ini_set('max_input_time', '-1');

//phpinfo();
use App\Kernel;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../vendor/autoload.php';
//print_r('/../.env.' . $env);die;
//print_r($_SERVER);
/*
// The check is to ensure we don't use .env in production
if (!isset($_SERVER['APP_ENV'])) {
   if (!class_exists(Dotenv::class)) {
      throw new \RuntimeException('APP_ENV environment variable is not defined. You need to define environment variables for configuration or add "symfony/dotenv" as a Composer dependency to load variables from a .env file.');
   }
}
*/
//print_r($_SERVER['SERVER_NAME']);
$env = $_SERVER['APP_ENV'] ?? 'dev';
$debug = (bool)($_SERVER['APP_DEBUG'] ?? ('prod' !== $env));

/*
 * ENTERED
 */
if ($_SERVER['SERVER_NAME'] == '127.0.0.1'
	|| $_SERVER['SERVER_NAME'] == 'localhost'
	|| $_SERVER['SERVER_NAME'] == 'localhost:82'
) {
	$env = 'dev';
} elseif ($_SERVER['SERVER_NAME'] == '127.0.0.1' ||
	$_SERVER['SERVER_NAME'] == 'localhost:82' ||
	$_SERVER['SERVER_NAME'] == 'localhost'
) {
	$env = 'dev';
} elseif ($_SERVER['SERVER_NAME'] == 'www.test.yourneeds.afterburnerbrains.com'
	|| $_SERVER['SERVER_NAME'] == 'test001.nachhaltigkeit-versicherung.de'
) {
	$env = 'test';
} elseif ($_SERVER['SERVER_NAME'] == 'prod001.nachhaltigkeit-versicherung.de'
	|| $_SERVER['SERVER_NAME'] == 'nachhaltigkeit-versicherung.de'
	|| $_SERVER['SERVER_NAME'] == 'www.nachhaltigkeit-versicherung.de'
) {
	$env = 'prod';
} else {
	$env = 'dev';
}
(new Dotenv())->load(__DIR__ . '/../.env.' . $env);
//print_r($_SERVER);
//print_r(__DIR__ . "/../.env.$env");
if ($debug) {
	umask(0000);
	Debug::enable();
}

if ($trustedProxies = $_SERVER['TRUSTED_PROXIES'] ?? false) {
	Request::setTrustedProxies(explode(',', $trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if ($trustedHosts = $_SERVER['TRUSTED_HOSTS'] ?? false) {
	Request::setTrustedHosts(explode(',', $trustedHosts));
}

$kernel = new Kernel($env, $debug);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
