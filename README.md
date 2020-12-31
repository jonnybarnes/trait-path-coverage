# Trait Path Coverage

Can we get 100% path coverage when using traits?

This is a project with a single trait, and a single class that uses the trait. There is a testcase for the class.

PHPUnit will then complain the trait itself is not fully covered:

```shell
XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-text
PHPUnit 9.5.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.839, Memory: 306.00 MB

OK (1 test, 1 assertion)


Code Coverage Report:
  2020-12-31 11:41:00

 Summary:
  Classes: 100.00% (2/2)
  Methods: 100.00% (2/2)
  Paths:   50.00% (1/2)
  Branches:   50.00% (1/2)
  Lines:   100.00% (2/2)

App\Bar
  Methods: 100.00% ( 1/ 1)   Paths: 100.00% (  1/  1)   Branches: 100.00% (  1/  1)   Lines: 100.00% (  1/  1)
App\FooTrait
  Methods: 100.00% ( 1/ 1)   Paths:   0.00% (  0/  1)   Branches:   0.00% (  0/  1)   Lines: 100.00% (  1/  1)
```
