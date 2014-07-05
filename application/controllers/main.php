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

		$_SESSION['email'] = $_GET['email'];
		$_SESSION['password'] = $_GET['password'];

		$email = $_SESSION['email'];
		$password = $_SESSION['password'];

		if ($email == "user1@gmail.com")
			$_SESSION['sid'] = 1;
		else if ($email == "user2@gmail.com")
			$_SESSION['sid'] = 2;
		else if ($email == "user3@gmail.com")
			$_SESSION['sid'] = 3;
		else if ($email == "user4@gmail.com")
			$_SESSION['sid'] = 4;
		else if ($email == "user5@gmail.com")
			$_SESSION['sid'] = 5;

		$data['sid']	= $_SESSION['sid'];
		
		$this->load->helper('url');
		redirect('/main/dashboard', $data);
	}

	public function logout() {
		session_start();
		$_SESSION = array();
		session_destroy();

		$this->load->helper('url');
		redirect('/main');
	}

	public function dashboard() {
		$this->load->view('ro_admin');
	}

	public function roreq($user=null)
	{
		$data['username'] = "fajar";
		$data['usertype'] = "sd"; // sd, ga, pu, ls, fi
		$this->load->view('rorequest', $data);
	}
	public function imreq($user=null)
	{
		$data['username'] = "fajar";
		$data['usertype'] = "ga"; // ga, pu, fi
		$this->load->view('imrequest', $data);
	}
	public function invreq($user=null)
	{
		$data['username'] = "fajar";
		$data['usertype'] = "ga"; // ga, pu, fi
		$this->load->view('invrequest', $data);
	}
}
// * End of file welcome.php */
/* Location: ./application/controllers/welcome.php */