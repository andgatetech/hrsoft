<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
    }

    public function getAllEmployee() {
        $test = 1 + 1;

        $expected_result = 2;

        $test_name = 'Get Total Employee';

        echo $this->unit->run($test, $expected_result, $test_name);
    }

}
