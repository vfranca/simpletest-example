<?php
require_once __DIR__.'/bootstrap.php';

class HomeTest extends WebTestCase
{
    public function testHomePage() {
        $this->get('http://localhost:8000');
        $this->assertTitle('SimpleTest Sample');
    }
}
