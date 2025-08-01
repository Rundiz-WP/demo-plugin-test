# Demonstration of WordPress plugin unit test.

## Run unit testing.
### Install
* Install [WP-CLI][1]
* Install [PHPUnit][2]
* Install [WordPress PHPUnit][3] or Download for [Windows][4]
* Download this plugin and extract in your stand alone folder OR in the installed WordPress **/wp-content/plugins/demo-plugin-test** folder.

Files that is required for running unit testing.
* Plugin file (demo-plugin-test.php)
* phpunit.xml.dist
* tests/

### Run
* Run the command `phpunit` (Recommend PHPUnit 11 and PHP 8.4).
* The result should be:

> OK (1 test, 2 assertions)

## Run PHP CodeSniffer.

### Install
* Install [PHP_CodeSniffer][5] (recommended to install via Composer and set Windows environment `PATH` to **vendor/bin**).
* Install [PHPCompatibilityWP][6] (via Composer).
* Install [WordPress Coding Standard][7] (as standalone but DO NOT follow **Add its path to the PHP_CodeSniffer configuration** step).
    * Manually edit **vendor/squizlabs/php_codesniffer/CodeSniffer.conf** file to prepend `../../../wpcs,` value.

Files that is required for running PHP CodeSniffer.
* Plugin file (demo-plugin-test.php)
* .phpcs.xml.dist

### Run
* Run the command `phpcs`.
* The result should be:

> E 1 / 1 (100%)

And follow with more details.


[1]: https://wp-cli.org/#installing
[2]: https://make.wordpress.org/core/handbook/testing/automated-testing/phpunit/
[3]: https://make.wordpress.org/cli/handbook/misc/plugin-unit-tests/
[4]: https://github.com/Rundiz-WP/wp-plugin-unit-tests
[5]: https://github.com/squizlabs/PHP_CodeSniffer#composer
[6]: https://github.com/PHPCompatibility/PHPCompatibilityWP#installation-instructions
[7]: https://github.com/WordPress/WordPress-Coding-Standards#standalone