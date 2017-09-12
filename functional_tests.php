<?php
const VENDOR_DIR = __DIR__.'/vendor';
const URL = 'http://localhost:8000/';
const EXTENSION = '.php';

require_once VENDOR_DIR.'/simpletest/simpletest/autorun.php';
require_once VENDOR_DIR.'/simpletest/simpletest/web_tester.php';

class AllFileTests extends TestSuite {
    public function __construct() {
        parent::__construct();
        $this->collect(dirname(__FILE__) . '/tests/functional',
        new SimplePatternCollector('/Test.php/'));
    }
}
