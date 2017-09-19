<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends MY_Controller {

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


	public function getHeader(){
		$this->load->view("header", $this->session->all_userdata());
	}

	public function getFooter(){
		$this->load->view("footer");
	}

	public function getBanner($data){
		$this->load->view("banner", $data);
	}

		// upload profile pictures, not gallery pictures
	// profile pictures will be the avatar of user when logged in
	public function upload_profile_images($userId){
        $config['upload_path'] = './uploads/profile/images/'.$userId;
        //make a profile directory for this user if the user hasn't created yet
		if( !is_dir($config['upload_path'])) mkdir($config['upload_path'], 0755, TRUE);

		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['max_width'] = '20000';
		$config['max_height'] = '20000';
		$config['file_name'] = 'profile.jpg';
		// overwrite existing file
		$config['overwrite'] = TRUE;

		$filepath = $config['upload_path'].'/'.$config['file_name'];
		$this->load->library('upload', $config);
		 if ( ! $this->upload->do_upload())
		  {
		   $error = array('error' => $this->upload->display_errors());
		   return $error;
		  } 
		  else
		  {
		   $data = array('upload_data' => $this->upload->data());
		   $this->resize_image($filepath, $filepath, 300, 300);
		   return 'success';
		  }

	}

	public function upload_album_images($userId, $album_title="default"){
        $config['upload_path'] = './uploads/profile/images/'.$userId.'/album/'.$album_title."/";
        //make a profile directory for this user if the user hasn't created yet
		if( !is_dir($config['upload_path'])) mkdir($config['upload_path'], 0755, TRUE);

		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['max_width'] = '20000';
		$config['max_height'] = '20000';
		// overwrite existing file

		$filepath = $config['upload_path'];
		$this->load->library('upload', $config);
		 if ( ! $this->upload->do_upload())
		  {
		   $error = array('error' => $this->upload->display_errors());
		   return $error;
		  } 
		  else
		  {
		   $data = array('upload_data' => $this->upload->data());
		   $this->resize_image($filepath, $filepath, 300, 300);
		   return $data;
		  }

	}

	// This will resize image to any size you prefer
	function resize_image($sourcePath, $desPath, $width = '500', $height = '500')
    {

    	$this->load->library("image_lib");
        $this->image_lib->clear();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $sourcePath;
        $config['new_image'] = $desPath;
        $config['quality'] = '100%';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = true;
        $config['thumb_marker'] = '';
        $config['width'] = $width;
        $config['height'] = $height;
        $this->image_lib->initialize($config);
 
        if ($this->image_lib->resize())
            return true;
        return false;
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */