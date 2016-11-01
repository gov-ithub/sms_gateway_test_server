<?hh

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\SapiEmitter;
use FredEmmott\HackRouter\HttpMethod;

final class SMSGatewayTestServer {
  public static async function respondTo(
    ServerRequestInterface $request,
  ): Awaitable<void> {
    $response = await self::getResponseForRequest($request);
    /* HH_IGNORE_ERROR[2049] no HHI for Diactoros */
    (new SapiEmitter())->emit($response);
  }

  public static async function getResponseForRequest(
    ServerRequestInterface $request,
  ): Awaitable<ResponseInterface> {
    try {
      list ($controller, $vars) = (new Router())->routeRequest(
        HttpMethod::assert($request->getMethod()),
        $request->getUri()->getPath(),
      );
      return await (new $controller($vars, $request))->getResponse();
    } catch (HTTPException $e) {
      return $e->getResponse($request);
    }
  }
}
