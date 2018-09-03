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

// ---------------function to check in  user
public function checkIn($user_id)
{
    // checkin after scanning
    $data = array( 
        'checkin'   =>  '1'
    );
    $this->db->where('user_id', $user_id);

    if($this->db->update('users_tab', $data)){
        if ($this->db->affected_rows()==1) {
            $response = array(
            'status' => true, //---------insert db success code
            'status_message' => 'You are successfully Checked in.'
        );
        } else {
            $response = array(
            'status' => true, //---------db error code 
            'status_message' => 'You are already Checked in.'
        );
        }
    }
    else{
        $response = array(
            'status' => false, //---------db error code 
            'status_message' => 'Checking In failed. Try again.'
        );
    }

    return $response;
}

// ---------------function to check out  user
public function checkOut($user_id)
{
    // checkin after scanning
    $data = array( 
        'checkin'   =>  '0'
    );
    $this->db->where('user_id', $user_id);

    if($this->db->update('users_tab', $data)){
        if ($this->db->affected_rows()==1) {
            $response = array(
            'status' => true, //---------insert db success code
            'status_message' => 'You are successfully Checked out.'
        );
        } else {
            $response = array(
            'status' => true, //---------db error code 
            'status_message' => 'You are already Checked out.'
        );
        }
    }
    else{
        $response = array(
            'status' => false, //---------db error code 
            'status_message' => 'Checking Out failed. Try again.'
        );
    }

    return $response;
}

// ---------------function to check out  user
public function updateImg($img_path,$user_id,$unique_code)
{
    // checkin after scanning
    $data = array( 
        'qr_img'   =>  $img_path,
        'unique_code'   =>  $unique_code
    );
    $this->db->where('user_id', $user_id);

    if($this->db->update('users_tab', $data)){
        if ($this->db->affected_rows()==1) {
            $response = array(
            'status' => true, //---------insert db success code
            'status_message' => 'QR Image saved.'
        );
        } else {
            $response = array(
            'status' => true, //---------db error code 
            'status_message' => 'QR Image already saved.'
        );
        }
    }
    else{
        $response = array(
            'status' => false, //---------db error code 
            'status_message' => 'QR Image not saved.'
        );
    }

    return $response;
}

// function to get user details 
public function getUserDetails($unique_code){
   // print_r($unique_code);
    $result=$this->db->query("SELECT * FROM users_tab WHERE unique_code='".$unique_code."' ");

    if ($result->num_rows() <= 0) {
        $response = array(
            'status' => false,
            'status_message' => 'No data found.');
    } else {
        $response = array(
            'status' => true,
            'status_message' => $result->result_array());
    }
    return $response;
}

}