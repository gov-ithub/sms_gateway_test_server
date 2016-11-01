<?hh
require_once(__DIR__.'/../vendor/autoload.php');

use \FredEmmott\HackRouter\Codegen;

final class UpdateCodegen {
  public function main(): void {
    Codegen::forTree(
      __DIR__.'/../../src/',
      shape(
        'controller_base' => WebController::class,
        'router' => shape(
          'abstract' => false,
          'file' => __DIR__.'/../codegen/Router.php',
          'class' => 'Router',
        ),
      ),
    )->build();
  }
}
