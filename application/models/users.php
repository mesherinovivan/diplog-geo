<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author Ivan
 */
class Users extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function auth($login,$pwd){
        $params = array($login,md5($pwd));
        $sql = "select * from tbl_users where login=? and pwd=? and active = 1";
        $query = $this->db->query($sql,$params);
        if ($query->num_rows($query) > 0){
            ////$row = $query->result('array');
            $_SESSION['is_auth'] = true;
            ////$_SESSION['user_name'] = $row['name'];
            return true;
        }
        else{
            return false;
        }
    }
}
