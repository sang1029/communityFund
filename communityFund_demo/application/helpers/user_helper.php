<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 function current_user(){
  $CI =& get_instance();
  $CI->load->model("UserModel");
  $CI->load->library("UserObject");

  $user_id = $CI->session->userdata("user_id");
  $user = $CI->UserModel->get_user_by_userid($user_id);

  return $user;
 }

 function validateLogin(){
  $CI =& get_instance();
  $CI->load->model("UserModel");
  $CI->load->library("UserObject");

  if(!$CI->session->userdata['logged_in']) redirect('user/login');
 }

?>