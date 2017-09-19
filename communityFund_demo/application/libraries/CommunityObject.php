<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class CommunityObject {


	public $community_id;

	public $interest;
	public $location;

	public function getCommunityId()
    {
        return $this->community_id;
    }
    public function setCommunityId($community_id)
    {
        $this->community_id = $community_id;
    }
    public function getInterest()
    {
        return $this->interest;
    }
    public function setInterest($interest)
    {
        $this->interest = $interest;
    }
        public function getLocation()
    {
        return $this->location;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
}
