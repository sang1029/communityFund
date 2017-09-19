<?php

    class UserModel extends CI_Model {

        var $dateString = '';
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->database();
            $this->load->helper('date');
            $this->dateString = "%Y-%m-%d";

        }
        
        // Get all users in an array
        function get_users(){
            $query = $this->db->get("users");
            if( $query->num_rows() > 0){
                $userArray = array();
                $result = $query->result();
                foreach ($result as $userData) {
                    # code...
                    $userObject = $this->userFactory($userData);
                    array_push($userArray, $userObject);
                }
                return $userArray;
            }else{
                return false;
            }
        }

        function get_user_by_username($username)
        {

            $this->db->where("username", $username);
            $query = $this->db->get('users');
            return $query->result();
        }

        function get_user_by_userid($user_id)
        {
            $this->db->where("user_id", $user_id);
            $query = $this->db->get('users');
            if( $query->num_rows() > 0){
                $result = $query->result()[0];
                return $this->userFactory($result);
            }else{
                return false;
            }
        }

        function create_user($userData){
            // encrypt password


            $user = array(
                'user_id' => '',
                'email' => $userData->email,
                'username' => $userData->username,
                'password' => $userData->password,
                'interest' => $userData->interest,
                'location' => $userData->location,
                'created_at' => mdate($this->dateString, time()),
                'last_updated_at' => mdate($this->dateString, time()),
                'last_logged_in' => mdate($this->dateString, time())
                );

            $this->db->insert("users", $user);
            $userId = $this->db->insert_id();

            // return user id after inserted
            return $userId;
       }

       function validate_user($userData){
            $this->load->library('encrypt');

            $this->db->where('email', $userData->email);
            $query = $this->db->get("users");
            if($query->num_rows() > 0){
                $result = $query->result()[0];
                $dbPassword = $this->encrypt->decode($result->password);
                $userPassword = $this->encrypt->decode($userData->getPassword());
                if($dbPassword == $userPassword){
                    $user = $this->userFactory($result);
                    return $user;
                }else{
                    return false;
                }
            }else{
                // no records found for this username, meaning account does not exist
                return false;
            }
            # code...
        }

        function update_password($userData)

        {
            $this->db->where("email", $userData->getEmail());

            $data = array(
                    'password'          => $userData->getPassword(),
                    'last_updated_at'   =>  mdate($this->dateString, time())
                );

            $this->db->update("users", $data);
        }
        
        // Update last log in time
        function update_login_time($userData){
            $this->db->where("username", $userData->getUsername());

            $data = array(
                    'last_logged_in'   =>  mdate($this->dateString, time())
                );

            $this->db->update("users", $data);
        }



        // converts db record from the users table into an user object
        function userFactory($dbRecord){
            $this->load->library("UserObject");
            $user = new UserObject();

            $user->setEmail($dbRecord->email);
            $user->setUsername($dbRecord->username);
            $user->setUserId($dbRecord->user_id);
            $user->setInterest($dbRecord->interest);
            $user->setLocation($dbRecord->location);
            $user->setCreatedAt($dbRecord->created_at);
            $user->setLastUpdatedAt($dbRecord->last_updated_at);
            $user->setLastLaggedIn($dbRecord->last_logged_in);
           
            return $user;
        }

    }
?>