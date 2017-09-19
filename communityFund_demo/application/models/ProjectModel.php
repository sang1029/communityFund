<?php

    class ProjectModel extends CI_Model {

        var $dateString = '';
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->database();
            $this->load->helper('date');
            $this->dateString = "%Y-%m-%d";

        }
        
        // Get all projects in an array
        function get_projects(){
            $query = $this->db->get("projects");
            if( $query->num_rows() > 0){
                $projectsArray = array();
                $result = $query->result();
                foreach ($result as $projectData) {
                    # code...
                    $projectObject = $this->projectFactory($projectData);
                    array_push($projectsArray, $projectObject);
                }
                return $projectsArray;
            }else{
                return false;
            }
        }

        function get_project_by_id($project_id)
        {
            $this->db->where("project_id", $project_id);
            $query = $this->db->get('projects');
            if( $query->num_rows() > 0){
                $result = $query->result()[0];
                return $this->projectFactory($result);
            }else{
                return false;
            }
        }
        
        function get_project_by_uid($user_id){
            $this->db->where("initiator", $user_id);
            $query = $this->db->get('projects');
            if ($query->num_rows() > 0){
                $result =$query->result()[0];
                // generate userprofile object directly from database
                $userProject = $this->projectFactory($result);
                return $userProject;
            }else{
                return false;
            }
        }
        
        function create_project($user_id, $community,  $projectData){

            $project = array(
  
                'name' => $projectData->name,
                'initiator' => $user_id,
                'funded' => 0,
                'goal' => $projectData->goal,
                'description' => $projectData->description,
                'community_id' => $community->getCommunityId(),
                'createDate' => mdate($this->dateString, time()),
                );

            var_dump($project);

            $this->db->insert("projects", $project);
            $project_id = $this->db->insert_id();

            // return projectid after inserted
            return $project_id;
       }


        // converts db record from the projects table into a project object
        function projectFactory($dbRecord){
            $this->load->library("ProjectObject");
            $project = new ProjectObject();
            $project->setProjectId($dbRecord->project_id);
            $project->setName($dbRecord->name);
            $project->setInitiator($dbRecord->initiator);
            $project->setFunded($dbRecord->funded);
            $project->setGoal($dbRecord->goal);
            $project->setDescription($dbRecord->description);
            $project->setCommunityId($dbRecord->community_id);

            return $project;
        }

    }
?>