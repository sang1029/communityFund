<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class UserObject {

    public $email;
	public $username;
	public $user_id;
	public $password;
    public $interest;
    public $location;
	public $created_at;
	public $updated_at;
	public $last_logged_in;


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUsername()
    {
    	return $this->username;
    }
	public function setUsername($username){
    	$this->username = $username;
    }

    public function getPassword()
    {
    	return $this->password;
    }
    public function setPassword($password){
        $CI =& get_instance();
        $CI->load->library("encrypt");
    	$this->password = $CI->encrypt->encode($password);
    }

    public function getUserId(){
    	return $this->user_id;
    }
    public function setUserId($user_id){
    	$this->user_id = $user_id;
    }
    public function getInterest(){
        return $this->interest;
    }
    public function setInterest($interest){
        $this->interest = $interest;
    }
    public function getLocation(){
        return $this->location;
    }
    public function setLocation($location){
        $this->location = $location;
    }
    public function getCreatedAt(){
    	return $this->created_at;
    }
    public function setCreatedAt($created_at){
    	$this->created_at = $created_at;
    }

    public function getLastUpdatedAt(){
    	return $this->updated_at;
    }
    public function setLastUpdatedAt($updated_at){
    	$this->updated_at = $updated_at;
    }

    public function getLastLoggedIn(){
    	return $this->last_logged_in;
    }
    public function setLastLaggedIn($last_logged_in){
    	$this->last_logged_in = $last_logged_in;
    }
    
}

/* End of file Someclass.php */