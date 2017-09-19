<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_Controller extends General_User_Controller{

	function __construct()
	{
		parent::__construct();
	}
	
	public function make_project(){

        $this->validateLogin();

		$this->getHeader();
		// check if user has submitted the form
		if($this->input->post("name")){

			$this->load->library("ProjectObject");
			$this->load->model('ProjectModel');

            $this->load->library("CommunityObject");
            $this->load->model('CommunityModel');

 
            $this->load->library('form_validation');
			
		

			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');
			$this->form_validation->set_rules('goal', 'goal', 'required');
			
			$projectObj = new ProjectObject();
            $projectObj->setName($this->input->post('name'));

			$projectObj->setGoal($this->input->post('goal'));
			$projectObj->setDescription($this->input->post('description'));


    		$data = array(
    			'name'	=> $this->input->post('name'),
    			'description' => $this->input->post('description'),
				'goal' => $this->input->post('goal'),
    			);

            if( $this->form_validation->run() != FALSE)
            {

            	
//				$user = $this->UserModel->validate_user($userObject);
//    			$user_id = $this->session->get_userdata('user_id');
				$user_id = $this->session->userdata('user_id'); 
                $interest = $this->session->userdata('interest'); 
                $Location = $this->session->userdata('Location');

                $community_id = $this->CommunityModel->get_community_by_interest_location($interest, $Location);

    			if($community_id AND $user_id){

    				$this->ProjectModel->create_project($user_id, $community_id, $projectObj);

    			}else{
    				$this->load->view('project/createProject',$data);
    			}

    		}else{
    			$this->load->view('project/createProject',$data);
    		}	

    	}else{
    		$this->load->view('project/createProject');
    	}		

		$this->getFooter();
	}
    
	public function projectedit(){
		$this->validateLogin();
		
		$this->load->model("ProjectModel");
	    //$this->load->library('form_validation');
		$this->getHeader();
		$user_id = $this->session->userdata['user_id'];
        $userProject = $this->ProjectModel->get_project_by_uid($this->session->userdata['user_id']);
        $data = (array('userProject' => $userProject));
		if($this->input->post('title') and $this->input->post('goal') and $this->input->post('description')){
            $title = $this->input->post('title');
            $goal = $this->input->post('goal');
            $description = $this->input->post('description');
            $data = array('name' => $title, 'goal'=>$goal, 'description'=>$description);
            $this->db->where('initiator', $user_id);
            $this->db->update('projects', $data);
            redirect('user');
        } else{
            $this->load->view('project/projectedit', $data);
        }
        $this->getFooter();
    }
    
    public function projectpage(){
        $this->getHeader();
        $this->load->model("ProjectModel");
        $this->load->model("ProfileModel");
        $id = $this->uri->segment(3);
        $query = $this->db->query("SELECT * FROM users JOIN projects ON users.user_id=projects.initiator WHERE projects.project_id = '$id'");
        foreach ($query->result() as $row){ $uid = $row->user_id; }
        //echo $uid;
        $query = $this->db->query("SELECT * FROM users WHERE user_id='$uid'");
        foreach ($query->result() as $row){ $username = $row->username; $email=$row->email; }
        /*
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('projects', 'projects.initiator = users.user_id');
        $this->db->where('project_id', $id);
        $query1 = $this->db->get();
        $row = $query1->result();
        $uid = $row->user_id;*/
        //$user_id = $this->session->userdata['user_id'];
        $userProfile = $this->ProfileModel->getUserProfileByUserId($uid);
        $userProject = $this->ProjectModel->get_project_by_uid($uid);
        $data = array('userProject' => $userProject, 'userProfile' => $userProfile, 'username'=>$username, 'email'=>$email);
        $this->load->view('project/projectpage', $data);
        $this->getFooter();
        
    }

    public function projectlist(){
        $this->getHeader();
        $this->load->model("ProjectModel");
        $query = $this->db->get('projects');
        $data['query'] = $query->result();
        $this->load->view('project/projectlist', $data);
        $this->getFooter();
    }
	//Show projects in json for angularjs search 
	function projects_json($type=null){
		$this->load->model("ProjectModel");
		$this->load->library("ProjectObject");
		$projectArray = $this->ProjectModel->get_projects();
		echo json_encode($projectArray);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */