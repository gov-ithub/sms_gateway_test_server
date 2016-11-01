<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * To re-generate this file run /var/www/html/build/build.php
 *
 *
 * @generated SignedSource<<2e37b822b620e12abdc6c479ef03107f>>
 */

final class Router
  extends \FredEmmott\HackRouter\BaseRouter<classname<\WebController>> {

  <<__Override>>
  final public function getRoutes(
  ): ImmMap<\FredEmmott\HackRouter\HttpMethod, ImmMap<string, classname<\WebController>>> {
    $get = ImmMap {
      '/' => \HomeController::class,
    };
    return ImmMap {
      \FredEmmott\HackRouter\HttpMethod::GET => $get,
    };
  }
}
