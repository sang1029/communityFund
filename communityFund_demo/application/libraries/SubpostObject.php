<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ProfileObject {


    var $subpost_id;
    var $post_id;
    var $user_id;
    var $subpost_content;
    var $subpost_date;
    var $post_poll;


    public function getSubPostID(){
    	return $this->subpost_id;
    }
    public function setSubPostID($subpost_id){
        $this->subpost_id = $subpost_id;
    }
    public function getPostID(){
    	return $this->post_id;
    }
    public function setPostID($post_id){
        $this->post_id = $post_id;
    }
    public function getUserID(){
    	return $this->user_id;
    }
    public function setUserID($user_id){
        $this->user_id = $user_id;
    }
    public function getSubPostContent(){
    	return $this->subpost_content;
    }
    public function setSubContent($subpost_content){
        $this->subpost_content = $subpost_content;
    }
    public function getSubPostDate(){
    	return $this->subpost_date;
    }
    public function setSubPostDate($subpost_date){
        $this->subpost_date = $subpost_date;
    }
    public function getSubPostPoll(){
    	return $this->subpost_poll;
    }
    public function setSubPostPoll($subpost_poll){
        $this->subpost_poll = $subpost_poll;
    }

}