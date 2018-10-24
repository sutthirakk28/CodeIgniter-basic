<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users  extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
	public function index()
	{
		$this->load->model('users_model');
		$data['list_user'] = $this->users_model->list_users();
		$data['heading'] = "ทดสอบเขียน codeigniter 3";
		$this->load->view('users_show',$data);
    }
    
    // public function myfunction()
    // {   
    //     $this->load->database();   
    //     $this->load->model('news_m');   
    //     //$data = $this->news_m->get_data();
    //     $data['testtest'] = 'ข้อความนี้ส่งมาจาก controller';
    //     $this->load->view('news_myfunction',$data); 
	// }
	
	public function register_user()
    {   
		
	}
	public function add_user()
    {   
		echo "เพิ่มข้อมูล Users";
	}
	public function update_user()
    {   
		echo 'แก้ไข user';
	}
	public function delete_user()
    {   
		echo 'ลบ user';
	}
	public function search_user()
    {   
		echo 'ค้นหา user';
    }
}
