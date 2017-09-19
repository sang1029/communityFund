<?php

    class CommunityModel extends CI_Model {

        var $dateString = '';
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->database();
            $this->load->helper('date');
            $this->dateString = "%Y-%m-%d";

        }

        function create_community($CommunityData){

            $community = array(
                'community_id' => '',
                'interest' => $CommunityData->interest,
                'location' => $CommunityData->location,
                );

            $this->db->insert("communities", $community);

            $communityId = $this->db->insert_id();

            return $communityId;


        }

        function get_community_by_interest_location($interest, $location)
        {

            $this->db->where("interest", $interest) And $this->db->where("location", $location);
            $query = $this->db->get('communities');
            if($query->num_rows() > 0){
                return $this->communityFactory($query->result()[0]);
            }else{
                return false;
            }
        }

        function get_community_id_by_interest_location($interest, $location)
        {

            $this->db->select("community_id");
            $this->db->where("interest", $interest) And $this->db->where("location", $location);
            $query = $this->db->get('communities');
            if($query->num_rows() > 0){
                return $query->result()[0];
            }else{
                return false;
            }
        }


        function communityFactory($dbRecord){
            $this->load->library("CommunityObject");
            $community = new CommunityObject();

            $community->setCommunityId($dbRecord->community_id);
            $community->setInterest($dbRecord->interest);
            $community->setLocation($dbRecord->location);

           
            return $community;
        }
    } 
?>