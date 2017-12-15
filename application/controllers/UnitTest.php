<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
    }
    public function index(){
        $this->testGetTotalEmployee();
        $this->testGetInactiveEmployee();
        echo $this->unit->report();
    }

    public function testGetTotalEmployee() {
        $test = 1 + 1;

        $expected_result = 2;

        $test_name = 'Get Total Employee';

        $this->unit->run($test, $expected_result, $test_name);
        
    }
    public function testGetInactiveEmployee() {
        $test = 1 + 1;

        $expected_result = 2;

        $test_name = 'Get Inactive Employee';

        $this->unit->run($test, $expected_result, $test_name);
    }

}
