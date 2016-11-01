<?hh // strict

final class Builder {
  public static function run(): void {
    (new UpdateCodegen())->main();
  }
}
