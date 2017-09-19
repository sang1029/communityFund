<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ProjectObject {

    var $projectId;
    var $name;
    var $initiator;
    var $funded;
    var $goal;
    var $description;
    var $community_id;
    var $createDate;
    var $errorMsg;


    public function getProjectId()
    {
    	return $this->project_id;
    }
    public function setProjectId($project_id)
    {
        return $this->project_id = $project_id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getInitiator(){
    	return $this->initiator;
    }
    public function setInitiator($initiator){
    	$this->initiator = $initiator;
    }
    public function getFunded(){
        return $this->funded;
    }
    public function setFunded($funded){
        $this->funded = $funded;
    }
    public function getGoal(){
        return $this->goal;
    }
    public function setGoal($goal){
        $this->goal = $goal;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getCommunity(){
        return $this->description;
    }
    public function setCommunity($community){
        $this->community = $community;
    }
    public function getCreateDate(){
        return $this->createDate;
    }
    public function setCreateDate($createDate){
        $this->createDate = $createDate;
    }

    public function setErrorMsg($msg){
        $this->errorMsg = $msg;
    }
    public function getErrorMsg($msg){
        return $this->errorMsg;
    }
}

/* End of file Someclass.php */