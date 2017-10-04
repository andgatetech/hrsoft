<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("company_model");
        $this->load->model("station_model");
        $this->load->model("department_model");
        $this->load->model("employee_type_model");
        $this->load->model("employee_category_model");
        $this->load->model("employee_designation_model");
        $this->load->model("grade_model");
        $this->load->model("work_shift_model");
        $this->load->model("employee_model");
    }
    public function hr() {
        $layouts = array(
            'dashboard/hr'
        );
        renderLayout(null, $layouts, "Dashboard");
    }
}
