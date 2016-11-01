<?hh
require_once(__DIR__.'/../vendor/hh_autoload.php');

$request = \Zend\Diactoros\ServerRequestFactory::fromGlobals();

HH\Asio\join(
  SMSGatewayTestServer::respondTo($request)
);
