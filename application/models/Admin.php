<?php
//error_reporting(E_ERROR | E_PARSE);
class Admin extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->load->model('admin_model/settings_model');
    }
    // -----------------------USER REGISTERATION MODEL----------------------//
    public function getNextID($col_name, $table_name) {


        $sql = "SELECT MAX($col_name) as id FROM $table_name";
        $resultnew = $this->db->query($sql);

        $id = "";

        foreach ($resultnew->result_array() as $row) {
            $id = $row['id'];
        }
        return $id;
    }

    //-------------------------------------------------------------//
    
    // -----------------------Admin LOGIN ----------------------//
    //-------------------------------------------------------------//
    public function adminLogin($user_name, $password) {
        //sql query to check login credentials
        $pass = base64_encode($password);
        $query = "SELECT * FROM admin_tab WHERE admin_name='$user_name' AND admin_password='$password'";
        //echo $query;die();
        $result = $this->db->query($query);

        //if credentials are true, their is obviously only one record
        if ($result->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
        return $response;
    }
    //----------------------------LOGIN END------------------------------//



    //-------------------------------------------------------------------------
    public function getMemberDetails(){
        $response = array();
        $querynew = "SELECT * FROM users_tab";
        $query = $this->db->query($querynew);
        // Select record
        
        if ($query->num_rows() <= 0) {
            $response = array(
                'status' => 500,
                'countSum' => 0,
                'status_message' => 'No records Found.');
        } else {

            $countQuery = "SELECT * FROM users_tab WHERE checkin=1";
            $count = $this->db->query($countQuery);
            $countSum=$count->num_rows();
            $response = array(
                'status' => 200,
                'countSum' => $countSum,
                'status_message' => $query->result_array()
            );
        }
        return $response;
    }
    //-------------this fun is used to get all detials of members----------------//

     //-------------------------------------------------------------------------
    public function getMemberDetailsCsv(){
        $response = array();
        $querynew = "SELECT * FROM users_tab";
        $query = $this->db->query($querynew);
        // Select record
        
        if ($query->num_rows() <= 0) {
            $response = array(
                'status' => 500,
                'status_message' => 'No records Found.');
        } 
        else {
         $data=array();
         foreach ($query->result_array() as $key) {
            $valid_date = date( 'd M, Y', strtotime($key['dated']));
            $food='VEG';
                $checked='---';
                if($key['foodPreference']=='nveg' && $key['foodPreference']!=''){
                    $food='NON-VEG';
                }
                if($key['checkin']=='1'){
                    $checked='Checked In';
                }
            $data[]=array(
                'member_name'   =>  $key['member_name'],
                'gender'   =>  $key['gender'],
                'food'   =>  $food,
                'checked'   =>  $checked,
                'date'   =>  $valid_date
            );
        }
        $response = array(
            'status' => 200,
            'status_message' => $data
        );
    }
    return $response;
}
    //-------------this fun is used to get all detials of members----------------//
}
