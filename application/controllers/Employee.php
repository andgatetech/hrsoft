<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

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
    public function dashboard() {
        $layouts = array(
            'employee/dashboard'
        );
        renderLayout(null, $layouts, "Dashboard");
    }
    public function employeeList() {
        $data['employees'] = $this->employee_model->get_all_entries();
        $layouts = array(
            'employee/list'
        );
        renderLayout($data, $layouts, "Employee");
    }
    public function onboarding() {
        $layouts = array(
            'employee/onboarding'
        );
        renderLayout(null, $layouts, "Onboarding");
    }
    public function contract() {
        $layouts = array(
            'employee/contract'
        );
        renderLayout(null, $layouts, "Contract");
    }
    public function assignments() {
        $layouts = array(
            'employee/assignments'
        );
        renderLayout(null, $layouts, "Assignments");
    }
    public function transfers() {
        $layouts = array(
            'employee/transfers'
        );
        renderLayout(null, $layouts,"Transfers");
    }
    public function resignations() {
        $layouts = array(
            'employee/resignations'
        );
        renderLayout(null, $layouts,"Resignations");
    }
    public function achievements() {
        $layouts = array(
            'employee/achievements'
        );
        renderLayout(null, $layouts, "Achievements");
    }
    public function travels() {
        $layouts = array(
            'employee/travels'
        );
        renderLayout(null, $layouts, "Travels");
    }
    public function promotions() {
        $layouts = array(
            'employee/promotions'
        );
        renderLayout(null, $layouts, "Promotions");
    }
    public function complaints() {
        $layouts = array(
            'employee/complaints'
        );
        renderLayout(null, $layouts, "Complaints");
    }
    public function warnings() {
        $layouts = array(
            'employee/warnings'
        );
        renderLayout(null, $layouts, "Warnings");
    }
    public function terminations() {
        $layouts = array(
            'employee/terminations'
        );
        renderLayout(null, $layouts, "Terminations");
    }
    
    public function add(){
        $data['companies'] = $this->company_model->get_all_entries();
        $data['stations'] = $this->station_model->get_all_entries();
        $data['departments'] = $this->department_model->get_all_entries();
        $data['employeeTypes'] = $this->employee_type_model->get_all_entries();
        $data['employeeCategories'] = $this->employee_category_model->get_all_entries();
        $data['employeeDesignations'] = $this->employee_designation_model->get_all_entries();
        $data['grades'] = $this->grade_model->get_all_entries();
        $data['workShifts'] = $this->work_shift_model->get_all_entries();
        // layout defincation
        $data['js_to_load'] = array("employeelist", "employee.onboarding");
        $layouts = array(
            'employee/add_employee'
        );
        renderLayout($data, $layouts,"Add Employee");
    }
    public function add_process(){
        //print_r($_POST);die;
        $this->employee_model->insert_entry();
        $this->session->set_flashdata('message','Successfully Added.');
        redirect("employee/employeeList");
    }

    

}
