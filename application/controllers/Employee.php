<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function dashboard() {
        $layouts = array(
            'employee/dashboard'
        );
        renderLayout(null, $layouts);
    }
    public function employeeList() {
        $layouts = array(
            'employee/list'
        );
        renderLayout(null, $layouts);
    }
    public function onboarding() {
        $layouts = array(
            'employee/onboarding'
        );
        renderLayout(null, $layouts);
    }
    public function contract() {
        $layouts = array(
            'employee/contract'
        );
        renderLayout(null, $layouts);
    }
    public function assignments() {
        $layouts = array(
            'employee/assignments'
        );
        renderLayout(null, $layouts);
    }
    public function transfers() {
        $layouts = array(
            'employee/transfers'
        );
        renderLayout(null, $layouts);
    }
    public function resignations() {
        $layouts = array(
            'employee/resignations'
        );
        renderLayout(null, $layouts);
    }
    public function achievements() {
        $layouts = array(
            'employee/achievements'
        );
        renderLayout(null, $layouts);
    }
    public function travels() {
        $layouts = array(
            'employee/travels'
        );
        renderLayout(null, $layouts);
    }
    public function promotions() {
        $layouts = array(
            'employee/promotions'
        );
        renderLayout(null, $layouts);
    }
    public function complaints() {
        $layouts = array(
            'employee/complaints'
        );
        renderLayout(null, $layouts);
    }
    public function warnings() {
        $layouts = array(
            'employee/warnings'
        );
        renderLayout(null, $layouts);
    }
    public function terminations() {
        $layouts = array(
            'employee/terminations'
        );
        renderLayout(null, $layouts);
    }

    

}
