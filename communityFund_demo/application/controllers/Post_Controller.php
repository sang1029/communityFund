<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_Controller extends Main_Controller {

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

	public function index()
	{

		$this->getHeader();
		$this->load->view("indexPage");
		$this->getFooter();
	}

	public function make_post()
	{

		$this->getHeader();
		// check if user has submitted the form
		if($this->input->post("title"))
		{


			$this->load->library("PostObject");
			$this->load->model('PostModel');

			$this->load->library('ProjectObject');
			$this->load->model('ProjectModel');
 
            $this->load->library('form_validation');


			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('post_content', 'postpost_content', 'required');

			$projectObj = new ProjectObject();

            $postObj = new PostObject();
            $postObj->setTitle($this->input->post('title'));
            $postObj->setPostContent($this->input->post('post_content'));


    		$data = array(
    			'title'	=> $this->input->post('title'),
    			'post_content' => $this->input->post('post_content'),
    			);

            if( $this->form_validation->run() != FALSE)
            {
            	$community_id = $projectObj->getCommunityId();
            	$project_id = $projectObj->getProjectId();

    			$user_id = $this->session->get_userdata('user_id');

    			if($community_id AND $project_id AND $user_id){

    				$this->PostModel->create_post($community_id, $project_id, $user_id, $postObj);

    			}else{
    				$this->load->view('project/postsPage',$data);
    			}

    		}else{
    			$this->load->view('project/PostsPage',$data);
    		}	

    	}else{
    		$this->load->view('project/PostsPage');
    	}		

		$this->getFooter();
	}

}
	
