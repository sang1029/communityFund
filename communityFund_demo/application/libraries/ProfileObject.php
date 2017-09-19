<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ProfileObject {


    var $firstname;
    var $lastname;
    var $description;
    var $errorMsg;


    public function getFirstname()
    {
    	return $this->firstname;
    }
    public function setFirstname($firstname){
    	$this->firstname = $firstname;
    }
    public function getLastname(){
    	return $this->lastname;
    }
    public function setLastname($lastname){
    	$this->lastname = $lastname;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setErrorMsg($msg){
        $this->errorMsg = $msg;
    }
    public function getErrorMsg($msg){
        return $this->errorMsg;
    }
}

// class ProfileObject {


//     var $firstname;
//     var $lastname;
//     var $location;
//     var $interest;
//     var $photo;
//     var $errorMsg;


//     public function getFirstname()
//     {
//     	return $this->firstname;
//     }
//     public function setFirstname($firstname){
//     	$this->firstname = $firstname;
//     }
//     public function getLastname(){
//     	return $this->lastname;
//     }
//     public function setLastname($lastname){
//     	$this->lastname = $lastname;
//     }
//     public function getLocation(){
//         return $this->location;
//     }
//     public function setLocation($location){
//         $this->location = $location;
//     }
//     public function getInterest(){
//         return $this->interest;
//     }
//     public function setInterest($interest){
//         $this->interest = $interest;
//     }
//     public function getPhoto(){
//         return $this->photo;
//     }
//     public function setPhoto($photo){
//         $this->photo = $photo;
//     }
//     public function setErrorMsg($msg){
//         $this->errorMsg = $msg;
//     }
//     public function getErrorMsg($msg){
//         return $this->errorMsg;
//     }
// }
/* End of file Someclass.php */