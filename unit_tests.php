<?php
require_once __DIR__.'/vendor/simpletest/simpletest/autorun.php';

class AllFileTests extends TestSuite {
    public function __construct() {
        parent::__construct();
        $this->collect(__DIR__.'/tests/unit',
        new SimplePatternCollector('/Test.php/'));
    }
}
