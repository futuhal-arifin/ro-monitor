<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('ro_login');
	}

	public function login() {
		session_start();

		$email = $_GET['email'];
		$password = $_GET['password'];

		//$email = $_SESSION['email'];
		//$password = $_SESSION['password'];
		$sid = 1;
		
		if ($email == "sd@gmail.com")
			$sid = 'sd';
		else if ($email == "ga@gmail.com")
			$sid = 'ga';
		else if ($email == "pu@gmail.com")
			$sid = 'pu';
		else if ($email == "ls@gmail.com")
			$sid= 'ls';
		else if ($email == "fi@gmail.com")
			$sid = 'fi';

		$data['sid']	= $sid;
		$this->load->library('session');
        $sid = $this->session->set_userdata(array('sid'=>$sid));
		$this->load->helper('url');
		redirect('/main/dashboard', $data);
	}

	public function logout() {
		//session_start();
		//$_SESSION = array();
		//session_destroy();

		$this->load->helper('url');
		redirect('/main');
	}

	public function dashboard() {
		$this->load->view('ro_admin');
	}

	public function roreq($user=null)
	{
		$this->load->library('session');
		$sid = $this->session->userdata('sid');
		
		$data['username'] = "fajar";
		$data['usertype'] = $sid;//"sd"; // sd, ga, pu, ls, fi
		$this->load->view('rorequest', $data);
	}
	public function imreq($user=null)
	{
		$this->load->library('session');
		$sid = $this->session->userdata('sid');
		$data['username'] = "fajar";
		$data['usertype'] = $sid;//"ga"; // ga, pu, fi
		$this->load->view('imrequest', $data);
	}
	public function invreq($user=null)
	{
		$this->load->library('session');
		$sid = $this->session->userdata('sid');
		$data['username'] = "fajar";
		$data['usertype'] = $sid;//"ga"; // ga, pu, fi
		$this->load->view('invrequest', $data);
	}
}
// * End of file welcome.php */
/* Location: ./application/controllers/welcome.php */