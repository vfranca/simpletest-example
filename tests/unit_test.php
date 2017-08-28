<?php
require_once __DIR__.'/bootstrap.php';

class CalcTest extends UnitTestCase
{
    public function testAddOneAndOne() {
        $this->assertEqual(1+1, 2);
    }
}
