<?php
class MainTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionTestWorksFine ()
    {
        require_once '../public/test.php';
        $resultat=Main::test(true);
        $this->assertFalse($resultat);
    }
}