<?php

    class ProfileModel extends CI_Model {

        var $dateString;

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->database();
            $this->load->helper('date');
            $this->dateString = "%Y-%m-%d";
        }
        

        function getUserProfiles()
        {
            $this->load->model("UserModel");
            $this->load->library("UserObject");
            $usersArray = $this->UserModel->get_users();

            $profileArray = array();
            foreach ($usersArray as $user) {
                $profileObject = $this->getUserProfileByUserId($user->getUserId());
                array_push($profileArray, $profileObject);
            }
            return $profileArray;
        }

        function getUserProfileByUserId($user_id)
        {
            $this->db->where("user_id", $user_id);
            $query = $this->db->get('user_profile');
            if($query->num_rows() > 0){
                $result =$query->result();
                // generate userprofile object directly from database
                $userProfile = $this->userProfileFactory($result);
                return $userProfile;
            }else{
                return false;
            }
        
        }

        function getPassword()
        {
            $this->title   = $_POST['title']; // please read the below note
            $this->content = $_POST['content'];
            $this->date    = time();

            $this->db->insert('entries', $this);
        }

        function has_profile_setting($user_id, $setting_name){
            $this->db->where("user_id", $user_id);
            $this->db->where("setting_name", $setting_name);
            $query = $this->db->get("user_profile");
            
            return $query->num_rows() > 0;
        }
        function create_profile_setting($user_id, $setting_name, $setting_value){

            $profile_data = array(
                "user_id"   => $user_id,
                "setting_name" => $setting_name,
                "setting_value" => $setting_value
                );
            $this->db->insert("user_profile", $profile_data);

        }
        function create_profile($user_id, $userData){
            // create profile data upon user registration
            $user_profile = array(
                array(
                    'user_id'       => $user_id,
                    'setting_name'  => 'firstname',
                    'setting_value' => $userData->firstname
                    ),
                array(
                    'user_id'       => $user_id,
                    'setting_name'  => 'lastname',
                    'setting_value' => $userData->lastname
                    ),
                array(
                    'user_id'       => $user_id,
                    'setting_name'  => 'description',
                    'setting_value' => $userData->description
                    ),
                );
            $this->db->insert_batch("user_profile", $user_profile);
       }

        function update_profile($user_id, $userData)
        {
           // create profile data upon user registration
            $user_profile = array(
                
                array(
                    'setting_name'  => 'firstname',
                    'data' => array(
                        'setting_value' => $userData->firstname
                        )
                    ),
                 array(
                    'setting_name'  => 'lastname',
                     'data' => array(
                        'setting_value' => $userData->lastname
                        )
                    ),
                array(
                    'setting_name'  => 'description',
                     'data' => array(
                        'setting_value' => $userData->description
                        )
                    ),
                );
            foreach ($user_profile as $profile_data) {
                # code...
                $this->db->where("user_id", $user_id);
                $this->db->where("setting_name", $profile_data['setting_name']);
                
                $this->db->update("user_profile", $profile_data['data']);
                if(!$this->has_profile_setting($user_id, $profile_data['setting_name'])){
                    $this->create_profile_setting($user_id, $profile_data['setting_name'], $profile_data['data']['setting_value']);
                }

            }
        }

        // converts db record from the users table into an user object
        function userProfileFactory($dbRecord){
            $this->load->library("ProfileObject");
            $userProfile = new ProfileObject();
            foreach ($dbRecord as $setting) {
                // This will convert each setting name into a workable function call
                $func = 'set'.$setting->setting_name;
                // calls the setter function and sets value
                $userProfile->$func($setting->setting_value);

            }

            // return the whole object
            return $userProfile;
        }

    }
?>