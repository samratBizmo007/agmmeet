<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        
    }

    //-----------function for add skill in db-----------//

    public function registerUser($data)
    {
        extract($data);
    	 $sql = "INSERT INTO users_tab(member_name,availability,foodPreference,dated,ip_addr) VALUES ('$name','$availability','$foodPreference','$date','$ip_addr')";
         
        if ($this->db->query($sql)) {
              $id=$this->db->insert_id();
              $code=base64_encode($name.'|'.$date.'|'.time().'|'.$id);

            $response = array(
                'status' => true, //---------insert db success code
                'code'  =>  $code,
                'status_message' => 'Registration successfull.'
            );
        } else {
            $response = array(
                'status' => false, //---------db error code 
                'status_message' => 'Registration Failed !'
            );
        }
        return $response;
    }


   }