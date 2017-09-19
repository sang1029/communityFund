<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_User_Controller extends Main_Controller {

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

	function __construct()
    {
        parent::__construct();
    }

    //OLD
	// public function index()
	// {
	// 	$this->validateLogin();

	// 	$this->getHeader();

		

	// 	if($this->session->userdata['logged_in']){
 //            $this->load->model('ProfileModel');
 //            $this->load->model('ProjectModel');
     
	// 		$userProfile = $this->ProfileModel->getUserProfileByUserId($this->session->userdata['user_id']);
	// 		$userProject = $this->ProjectModel->get_project_by_uid($this->session->userdata['user_id']);
	// 		$uid = $this->session->userdata['user_id'];
	// 		// pass userprofile object to view for data retrieval
	// 		$query = $this->db->query("SELECT * FROM projects WHERE initiator='$uid'");
 //            foreach ($query->result() as $row){ $pid = $row->project_id;}
 //               if (!isset($pid)) $pid = -1;
 //            $data = array('userProfile' => $userProfile, 'userProject' => $userProject, 'pid' => $pid);
	// 		$this->load->view('user/profile', $data);
	// 	}
	// 	$this->getFooter();
		
	// }
	public function index()
	{
		$this->validateLogin();

		$this->getHeader();
		if($this->session->userdata['logged_in']){
            $this->load->model('ProfileModel');
            $this->load->model('ProjectModel');
            // gets userprofile object from database using userid
			$userProfile = $this->ProfileModel->getUserProfileByUserId($this->session->userdata['user_id']);
            $userProject = $this->ProjectModel->get_project_by_uid($this->session->userdata['user_id']);
            $uid = $this->session->userdata['user_id'];
            $query = $this->db->query("SELECT * FROM projects WHERE initiator='$uid'");
            foreach ($query->result() as $row){ $pid = $row->project_id;}
			// pass userprofile object to view for data retrieval
            if (!isset($pid)) $pid = -1;
            $data = array('userProfile' => $userProfile, 'userProject' => $userProject, 'pid' => $pid);

			$this->load->view('user/profile', $data);
		}
		$this->getFooter();
		
	}

	public function signup(){
		$this->getHeader();
		// check if user has submitted the form
		if($this->input->post("username")){
            $this->load->library("UserObject");
            $this->load->library("CommunityObject");
            $this->load->library("ProfileObject");
            $this->load->library('encrypt');

            $this->load->model('UserModel');
            $this->load->model('CommunityModel');
            $this->load->model('ProfileModel');
            $this->load->library('form_validation');

			$this->form_validation->set_rules('email', 'email', 'required|is_unique[user_profile.setting_name.email');
            $this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
			$this->form_validation->set_rules('password', 'password', 'required|min-length[6]|matches[repeat-password]');
			$this->form_validation->set_rules('email', 'email', 'required|is_unique[user_profile.setting_name.email');

            $UserObj = new UserObject();
            $UserObj->setUsername($this->input->post('username'));
            $UserObj->setPassword($this->input->post('password'));
            $UserObj->setEmail($this->input->post('email'));
            $UserObj->setLocation($this->input->post("location"));
    		$UserObj->setInterest($this->input->post("interest"));


            $profileObject = new ProfileObject();
    		$profileObject->setFirstname($this->input->post("firstname"));
    		$profileObject->setLastname($this->input->post("lastname"));
    		$profileObject->setDescription($this->input->post("description"));

    		$CommunityObject = new CommunityObject();
    		$CommunityObject->setInterest($this->input->post("interest"));
    		$CommunityObject->setLocation($this->input->post("location"));


    		$data = array(
    			'profileObject' => $profileObject,
    			'username'		=> $this->input->post('username'),
    			'email'         => $this->input->post('email'),
    			'interest'      => $this->input->post('interest'),
    			'location'      => $this->input->post('location'),
    			);

            if( $this->form_validation->run() != FALSE){
            	$user_id = $this->UserModel->create_user($UserObj);

            	if($user_id){

            		// create user profile for this new user
            		$this->ProfileModel->create_profile($user_id, $profileObject);

            		$newCommunityObject = $this->CommunityModel->get_community_by_interest_location($UserObj->getInterest(), $UserObj->getLocation());
            		var_dump($newCommunityObject);

            		if($newCommunityObject == false){
	            		$community_id = $this->CommunityModel->create_community($CommunityObject);
            		}


           			if ( $_FILES AND $_FILES['userfile']['name']  ) 
					{
						$uploaded = $this->upload_profile_images($user_id);
						if($uploaded == "success"){
							$this->load->view('user/signin');
		       			}else{
							$this->load->view('user/signup', $uploaded);
		       			}
					}
            	}else{

					$this->load->view('user/signup',$data);
            	}

            }else{
				$this->load->view('user/signup', $data);
            }


		// show registration form is user hasn't signup
		}else{
			$this->load->view('user/signup');
		}
		$this->getFooter();
	}



	// Login logic
	public function login(){
		$this->load->library('encrypt');
        $this->load->model('UserModel');
        $this->load->library("UserObject");

		// parameters received from posting a login form
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// var_dump($email);

		$this->getHeader();
		if($email AND $password){
			$userObject = new UserObject();
	        $userObject->setEmail($email);
	        $userObject->setPassword($password);


	        // Validate login credentials
	        // if user login credentials are valid, convert user object to match database data
	        // otherwise, remain the same
	        $user = $this->UserModel->validate_user($userObject);

	        // if logged in
	        if($user){

	        	$this->UserModel->update_login_time($user);

	        	$userData = array(

	        			'user_id'	=> $user->getUserId(),
	        			'email' => $user->getEmail(),
	        			'username' => $user->getUsername(),
	        			'interest' => $user->getInterest(),
	        			'location' => $user->getLocation(),
	        			
	        			"logged_in"	=> TRUE
	        		);
	        	// save user data in the session for quick retrieval
	        	$this->session->set_userdata($userData);
	        	
	        	redirect("/user");
	        }else{
	        	$data = array(
	        		'error' => "wrong password or email try again。"
	        		);
				$this->load->view("user/signin", $data);

	        }
		}else{
			$this->load->view("user/signin");
		}
      	$this->getFooter();

	}

	public function logout(){

		$this->session->sess_destroy();

		$this->getHeader();
		$this->load->view("indexPage");
		$this->getFooter();
	}

	public function validateLogin(){
		if(!$this->session->userdata['logged_in']) redirect('user/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */