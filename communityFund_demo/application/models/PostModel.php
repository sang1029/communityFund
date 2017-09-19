<?php

class PostModel extends CI_Model {

	function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->database();
            $this->load->helper('date');
            $this->dateString = "%Y-%m-%d";
        }

    //get all the post 
   	function get_post(){
        $query = $this->db->get("posts");
        if( $query->num_rows() > 0){
            $postArray = array();
            $result = $query->result();
            foreach ($result as $postData) {

                $postObject = $this->postFactory($postData);
                array_push($postArray, $postObject);
            }
            return $postArray;
        }else{
            return false;
        }
    }

    //get posts by community_id
    function get_post_by_communityid($community_id){
	    $this->db->where("community_id", $community_id);
	    if( $query->num_rows() > 0){
            $postArray = array();
            $result = $query->result();
            foreach ($result as $postData) {

                $postObject = $this->postFactory($postData);
                array_push($postArray, $postObject);
            }
            return $postArray;
        }else{
            return false;
        }
    }

    //get posts by project_id
    function get_post_by_projectid($project_id){
	    $this->db->where("project_id", $project_id);
	    if( $query->num_rows() > 0){
            $postArray = array();
            $result = $query->result();
            foreach ($result as $postData) {

                $postObject = $this->postFactory($postData);
                array_push($postArray, $postObject);
            }
            return $postArray;
        }else{
            return false;
        }
    }

    //get specific posts by user_id
    function get_post_by_userid($user_id){
	    $this->db->where("user_id", $user_id);
	    if( $query->num_rows() > 0){
            $postArray = array();
            $result = $query->result();
            foreach ($result as $postData) {

                $postObject = $this->postFactory($postData);
                array_push($postArray, $postObject);
            }
            return $postArray;
        }else{
            return false;
        }
    }

        //get posts by post_id
    function get_post_by_postid($post_id){
	    $this->db->where("post_id", $post_id);
	    $query = $this->db->get('posts');
	    if( $query->num_rows() > 0){
	        $result = $query->result()[0];
	        return $this->postFactory($result);
	    }else{
	        return false;
	    }
    }

    //create a post 
    function create_post($community_id, $project_id, $user_id, $postData){

            $post = array(
                'post_id' => '',
                'community_id' => $community_id
                'project_id' => $project_id
                'user_id' => $user_id,
                'title' => $postData->title,
                'post_content' => $postData->post_content,
                'post_data' => mdate($this->dateString, time()),
                'post_poll' => 0
                );

            $this->db->insert("posts", $post);
            $postId = $this->db->insert_id();

            // return post id after inserted
            return $postId;
       }

    //update poll
    function update_poll($postData)

        {
            $this->db->where("post_poll", $postData->getPostPoll());

            $data = array(
                    'post_poll' => ($postData->getPostPoll() + 1),
                );

            $this->db->update("posts", $data);
        }

    // converts db record from the posts table into an posts object
    function postFactory($dbRecord){
        $this->load->library("PostObject");
        $post = new PostObject();

        $post->setPostID($dbRecord->post_id);
        $post->setCommunityID($dbRecord->community_id);
        $post->setProjectID($dbRecord->project_id);
        $post->setUserID($dbRecord->user_id);
        $post->setTitle($dbRecord->title);
        $post->setPostContent($dbRecord->post_content);
        $post->setPostDate($dbRecord->post_data);
        $post->setPostPoll($dbRecord->post_poll);
       
        return $post;
    }

}

?>