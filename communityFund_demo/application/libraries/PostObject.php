<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class PostObject {


    var $post_id;
    var $community_id;
    var $project_id;
    var $user_id;
    var $title;
    var $post_content;
    var $post_date;
    var $post_poll;


    public function getPostID(){
    	return $this->post_id;
    }
    public function setPostID($post_id){
        $this->post_id = $post_id;
    }
   	public function getCommunityID(){
    	return $this->community_id;
    }
    public function setCommunityID($community_id){
        $this->community_id = $community_id;
    }
    public function getProjectID(){
    	return $this->project_id;
    }
    public function setProjectID($project_id){
        $this->project_id = $project_id;
    }
    public function getUserID(){
    	return $this->user_id;
    }
    public function setUserID($user_id){
        $this->user_id = $user_id;
    }
    public function getTitle(){
    	return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getPostContent(){
    	return $this->post_content;
    }
    public function setPostContent($post_content){
        $this->post_content = $post_content;
    }
    public function getPostDate(){
    	return $this->post_date;
    }
    public function setPostDate($post_date){
        $this->post_date = $post_date;
    }
    public function getPostPoll(){
    	return $this->post_poll;
    }
    public function setPostPoll($post_poll){
        $this->post_poll = $post_poll;
    }

}