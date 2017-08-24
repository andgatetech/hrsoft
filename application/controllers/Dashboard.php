<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                $layouts = array(
                    'employee_onboarding',
                    'employee_transfers',
                    'employee_transfer_information',
                    'employee_promotions',
                    'employee_promotion_information',
                    'employee_achievements',
                    'employee_achievement_information'
                );
		$this->renderLayout(null, $layouts);
	}

	private function renderLayout($data = null, $layouts=null){
		$data['layouts'] = $layouts; //manadory
		$this->load->view('admin/index', $data);
	}

}
