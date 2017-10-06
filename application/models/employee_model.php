<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of company_model
 *
 * @author khorshed
 */
class Employee_model extends CI_Model {

    public $first_name;
    public $last_name;
    public $birth_date;
    public $gender;
    public $blood_group;
    public $nationality;
    public $religion;
    public $marital_status;
    public $company_id;
    public $station_id;
    public $department_id;
    public $employee_type_id;
    public $employee_category;
    public $designation_id;
    public $work_shift_id;
    public $grade_id;
    public $status;

    public function get_all_entries() {
//        $this->db->select('*',
//                'station.name AS station', 
//                'department.name AS department', 
//                'employee_type.name AS type', 
//                'employee_category.name AS category',
//                'designation.name AS designation',
//                'grade.name AS grade',
//                'work_shift.name AS work_shift'
//                );
//        $this->db->from('employee');
//        $this->db->join('station', 'station.id = employee.station_id', 'left');
//        $this->db->join('department', 'department.id = employee.department_id');
//        $this->db->join('employee_type', 'employee_type.id = employee.employee_type_id');
//        $this->db->join('employee_category', 'employee_category.id = employee.employee_category');
//        $this->db->join('designation', 'designation.id = employee.designation_id');
//        $this->db->join('grade', 'grade.id = employee.grade_id');
//        $this->db->join('work_shift', 'work_shift.id = employee.work_shift_id');
        $query = $this->db->query('select employee.id, employee.first_name, employee.last_name, employee.birth_date, employee.gender, employee.blood_group,
employee.nationality, employee.religion, employee.marital_status, employee.created_at,employee.status, 
company.name AS company, 
station.name AS station,
department.name AS department,
employee_type.name AS type,
employee_category.name AS category,
designation.name as designation,
work_shift.name as work_shift,
grade.name as grade
from employee
inner join company on company.id = employee.company_id
inner join station on station.id = employee.station_id
inner join department on department.id = employee.department_id
inner join employee_type on employee_type.id = employee.employee_type_id
inner join employee_category on employee_category.id = employee.employee_type_id
inner join designation on designation.id = employee.department_id
inner join work_shift on work_shift.id = employee.work_shift_id
inner join grade on grade.id = employee.grade_id;
');
        //$query = $this->db->get("employee");
        return $query->result();
    }

    public function insert_entry() {
        $this->first_name = $_POST['first_name'];
        $this->last_name = $_POST['last_name'];
        $this->birth_date = $_POST['birth_date'];
        $this->gender = $_POST['gender'];
        $this->blood_group = $_POST['blood_group'];
        $this->nationality = $_POST['nationality'];
        $this->religion = $_POST['religion'];
        $this->marital_status = $_POST['marital_status'];
        $this->company_id = $_POST['company'];
        $this->station_id = $_POST['station'];
        $this->department_id = $_POST['department'];
        $this->employee_type_id = $_POST['employee_type'];
        $this->employee_category = $_POST['employee_category'];
        $this->designation_id = $_POST['designation'];
        $this->work_shift_id = $_POST['work_shift'];
        $this->grade_id = $_POST['grade'];
        $this->status = 1;

        $this->db->insert('employee', $this);
    }
    

    public function update_entry() {
        $this->name = $_POST['name'];
        $this->status = $_POST['status'];

        $this->db->update('employee', $this, array('id' => $_POST['id']));
    }

}
