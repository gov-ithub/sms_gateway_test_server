<?hh 

use \FredEmmott\HackRouter\{
  UriPattern,
    RequestParameter,
    RequestParameters,
    IncludeInUriMap,
    SupportsGetRequests
};

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

<<__ConsistentConstruct>>
abstract class WebController 
  implements 
    IncludeInUriMap,
    SupportsGetRequests {

  public function __construct(
    private $parameters,
    private ServerRequestInterface $request,
  ) {}

  final protected function __getParametersImpl(): RequestParameters {
    return $this->parameters;
  }

  abstract public function getResponse(): Awaitable<ResponseInterface>;
}
