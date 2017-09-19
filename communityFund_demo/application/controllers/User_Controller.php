<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends General_User_Controller {

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

    public function de_bug(){

    	$index = 1;

    	while ( $index <= 10) {
    		echo "deBuging</br>";
    		$index++;

    	}
    }

	public function edit(){
		$this->validateLogin();
		
		$this->load->model("ProfileModel");
	    $this->load->library('form_validation');
		$this->getHeader();
		$user_id = $this->session->userdata['user_id'];
		$userProfile = $this->ProfileModel->getUserProfileByUserId($user_id);

	
		$this->form_validation->set_rules('firstname', 'firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');

		if($this->input->post("firstname")){


			$userProfile->setFirstname($this->input->post("firstname"));
			$userProfile->setLastname($this->input->post("lastname"));
		
			$userProfile->setPhoto($this->input->post("userfile")?'uploaded':'N\A');
			// create user profile for this new user
			$this->ProfileModel->update_profile($user_id, $userProfile);
			// uploading photo is optional here
			if ( $_FILES AND $_FILES['userfile']['name']  ) 
				// if new photo is provided
			{
				$uploaded = $this->upload_profile_images($user_id);
				if($uploaded != "success"){
					$userProfile->setErrorMsg($uploaded['error']);
					$this->load->view('user/useredit', $userProfile);
				}
			}
	        if( $this->form_validation->run() != FALSE){
				
				redirect('user');
			}else{
				$this->load->view('user/useredit', $userProfile);
			}
		}else{
			$this->load->view("user/useredit", $userProfile);
		}
		

		$this->getFooter();
	}
		
    function change_password(){
        $this->load->library('form_validation');

		$this->form_validation->set_rules('old-password', 'old-password', 'required|min_length[6]');
		$this->form_validation->set_rules('new-password', 'new-password', 'required|min_length[6]|matches[repeat-password]');
		$this->form_validation->set_rules('repeat-password', 'new-password', 'required');
		$this->load->library('form_validation');
		$this->getHeader();

		$user_id = $this->session->userdata['user_id'];

		if( $this->form_validation->run() != FALSE){

			
			
			$this->load->model("UserModel");
			$this->load->library("UserObject");

			$old_password = $this->input->post("old-password");
			$new_password = $this->input->post("new-password");

			//old information
			$userObject = new UserObject();
			$userObject->setEmail($this->session->userdata['email']);
			$userObject->setPassword($old_password);



			//new information updated password
			$newUserObject = new UserObject();
			$newUserObject->setEmail($this->session->userdata['email']);
			$newUserObject->setPassword($new_password);

			$user = $this->UserModel->validate_user($userObject);

			if($user){
				// If user validation succeeded
				$this->UserModel->update_password($newUserObject);

				$data = array(
					'message' => "password already reseted"
				);
				$this->load->view("user/change_password", $data);
			}else{
				// User validation failed
				$data = array(
					'message' => "your password is incorrect"
				);
				$this->load->view("user/change_password", $data);
			}
		}else{

			$this->load->view("user/change_password");
		}
		$this->getFooter();
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */