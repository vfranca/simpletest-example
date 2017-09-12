<?php
class ExampleTest extends WebTestCase
{
    public function testHomePage() {
        $this->get(URL.'index'.EXTENSION);
        $this->assertTitle('SimpleTest Sample');
    }
}
