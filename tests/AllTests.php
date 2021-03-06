<?php
/**
 * Slim - a micro PHP 5 framework
 *
 * @author      Josh Lockhart
 * @link        http://www.slimframework.com
 * @copyright   2011 Josh Lockhart
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

require_once 'PHPUnit/Framework.php';
require_once 'ViewTest.php';
require_once 'RouteTest.php';
require_once 'RouterTest.php';
require_once 'RequestTest.php';
require_once 'ResponseTest.php';
require_once 'SlimTest.php';
require_once 'LoggerTest.php';
require_once 'LogTest.php';

class AllTests {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('SlimTestSuite');
        $suite->addTestSuite('ViewTest');
        $suite->addTestSuite('RouteTest');
        $suite->addTestSuite('RouterTest');
        $suite->addTestSuite('SlimTest');
        $suite->addTestSuite('RequestTest');
        $suite->addTestSuite('ResponseTest');
        $suite->addTestSuite('LoggerTest');
        $suite->addTestSuite('LogTest');
        return $suite;
    }

}

?>
