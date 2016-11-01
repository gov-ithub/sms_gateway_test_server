<?hh // strict

use FredEmmott\HackRouter\UriPattern;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactaros\HtmlResponse;

final class HomeController extends WebController {

  public static function getUriPattern(): UriPattern {
    return (new UriPattern()) 
      ->literal('/');
  }

  public async function getResponse(): Awaitable<ResponseInterface> {
    return Response::newWithStringBody('127.0.0.1 is where your <3 is');
  }
}
