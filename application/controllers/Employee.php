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

    public function index() {
        $this->dashboard();
    }

    /**
     * Menu Item: Dashboard
     */
    public function dashboard() {
        $layouts = array(
            'dashboard/employee'
        );
        renderLayout(null, $layouts, "Dashboard");
    }

    /**
     * Menu Item: Employee LIst
     */
    public function employeeList() {
        $data['employees'] = $this->employee_model->get_all_entries();
        //print_r($data['employees']);die;
        $layouts = array(
            'employee/list'
        );
        renderLayout($data, $layouts, "Employee");
    }

    /**
     * Menu Item: Employee On boarding
     */
    public function onboarding() {
        $layouts = array(
            'employee/onboarding'
        );
        renderLayout(null, $layouts, "Onboarding");
    }

    /**
     * Menu Item: Employee Contract
     */
    public function contract() {
        $layouts = array(
            'employee/contract'
        );
        renderLayout(null, $layouts, "Contract");
    }

    /**
     * Menu Item: Employee Assignment
     */
    public function assignments() {
        $layouts = array(
            'employee/assignments'
        );
        renderLayout(null, $layouts, "Assignments");
    }

    /**
     * Menu Item: Transfers
     */
    public function transfers() {
        $layouts = array(
            'employee/transfers'
        );
        renderLayout(null, $layouts, "Transfers");
    }

    /**
     * Menu Item: Resignations
     */
    public function resignations() {
        $layouts = array(
            'employee/resignations'
        );
        renderLayout(null, $layouts, "Resignations");
    }

    /**
     * Menu Item: Achievements
     */
    public function achievements() {
        $layouts = array(
            'employee/achievements'
        );
        renderLayout(null, $layouts, "Achievements");
    }

    /**
     * Menu Item: Travels
     */
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

    public function add() {
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
        renderLayout($data, $layouts, "Add Employee");
    }

    public function add_process() {
        //print_r($_POST);die;
        $this->employee_model->insert_entry();
        $this->session->set_flashdata('message', 'Successfully Added.');
        redirect("employee/employeeList");
    }

    /**
     * GRAPH DATA: TOTAL EMPLOYEE
     */
    public function donatChartDataTotalEmployee() {
        $data['employees'] = $this->employee_model->get_all_entries();
        $data = array(
            "count" => array("50"),
            "datasets" => array(array(
                    "data" => array(50),
                    "backgroundColor" => array("#FF6384"),
                    "hoverBackgroundColor" => array("#FF6384")
                ))
        );
        echo json_encode($data);
    }

    /**
     * GRAPH DATA: TOTAL EMPLOYEE
     */
    public function donatChartDataActiveEmployee() {
        $data['employees'] = $this->employee_model->get_all_entries();
        $data = array(
            "count" => array("40"),
            "datasets" => array(array(
                    "data" => array(40),
                    "backgroundColor" => array("#235660"),
                    "hoverBackgroundColor" => array("#235660")
                ))
        );
        echo json_encode($data);
    }

    /**
     * GRAPH DATA: TOTAL EMPLOYEE
     * @return json json data
     */
    public function donatChartDataInActiveEmployee() {
        $data['employees'] = $this->employee_model->get_all_entries();
        $data = array(
            "count" => array("70"),
            "datasets" => array(array(
                    "data" => array(1000),
                    "backgroundColor" => array("#2c2f30"),
                    "hoverBackgroundColor" => array("#2c2f30")
                ))
        );
        echo json_encode($data);
    }

}
