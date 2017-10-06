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
    public function pieChartDataEmployeMaleToFeMale() {
        $data['employees'] = $this->employee_model->get_all_entries();
        $data = array();
        $data[0] = array(
                        "label" => "Male",
                        "data" => 60
                      );
           $data[1] = array(
                        "label" => "Female",
                        "data" => 40
                      );
 
        echo json_encode($data);
    }
    public function pieChartDataEmployeByAgeGroup() {
        $data['employees'] = $this->employee_model->get_all_entries();
        $data = array();
        $data[0] = array(
                        "label" => "21-30",
                        "data" => 60
                      );
           $data[1] = array(
                        "label" => "31-40",
                        "data" => 30
                      );
           $data[2] = array(
                        "label" => "41-50",
                        "data" => 10
                      );
 
        echo json_encode($data);
    }
}
