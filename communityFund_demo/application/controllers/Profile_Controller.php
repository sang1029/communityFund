
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_Controller extends General_User_Controller {

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
    //OLD
	/*public function view($user_id){
		$this->validateLogin();

        $this->load->model('ProfileModel');
        $this->load->model('RelationshipModel');
        $this->load->model('PictureModel');
        $this->load->model('PictureSettingsModel');

        // gets userprofile object from database using userid
		$userProfile = $this->ProfileModel->getUserProfileByUserId($user_id);
		$userPicturesList = $this->PictureModel->get_all_pictures($user_id);
		$userPictureSettingsList = $this->PictureSettingsModel->get_all_picture_settings($userPicturesList);
		if ($userProfile){
			$this->getHeader();
			$userHasFollowed = $this->RelationshipModel->get_relationship($this->session->userdata['user_id'], $user_id, 'follow');
		// pass userprofile object to view for data retrieval
			$data = array(
				'user_id' => $user_id,
				'userProfile' => $userProfile,
				);
			$this->load->view('profile/userProfile', $data);
			$this->getFooter();
			//$this->session->set_userdata() add to session
		}else{
			redirect("user");
		}
		
		
	}*/ 
	public function view($user_id){
		$this->validateLogin();
        $this->load->model('ProfileModel');
        $this->load->model('ProjectModel');
        $this->load->model('RelationshipModel');
        $this->load->model('PictureModel');
        $this->load->model('PictureSettingsModel');

        // gets userprofile object from database using userid
		$userProfile = $this->ProfileModel->getUserProfileByUserId($user_id);
        $userProject = $this->ProjectModel->get_project_by_uid($user_id);
		$userPicturesList = $this->PictureModel->get_all_pictures($user_id);
		$userPictureSettingsList = $this->PictureSettingsModel->get_all_picture_settings($userPicturesList);
		if ($userProfile){
			$this->getHeader();
			$userHasFollowed = $this->RelationshipModel->get_relationship($this->session->userdata['user_id'], $user_id, 'follow');
		// pass userprofile object to view for data retrieval
			$data = array(
				'user_id' => $user_id,
                'test' => $test,
				'userProfile' => $userProfile,
                'userProject' => $test,
				);
			$this->load->view('profile/userProfile', $data);
			$this->getFooter();
			//$this->session->set_userdata() add to session
		}else{
			redirect("user");
		}
		
		
	}
	//Show users in json for angularjs search 
	function user_profiles_json($type=null){
		$this->load->model("ProfileModel");
		$this->load->library("ProfileObject");
		$profileArray = $this->ProfileModel->getUserProfiles();
		echo json_encode($profileArray);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */