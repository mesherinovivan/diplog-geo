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
class Calcroute_model extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function list_route_len(){
        /*$params = array($login,md5($pwd));
        $sql = "select * from tbl_users where login=? and pwd=? and active = 1";
        $query = $this->db->query($sql,$params);
        */
    }
    public function set_row_route($param){
        /*$params = array($login,md5($pwd));
        $sql = "select * from tbl_users where login=? and pwd=? and active = 1";
        $query = $this->db->query($sql,$params);
        */
        $this->db->insert('tbl_calcroute', $param); 
    }
    public function min_length($start_point){
        $find_point = $start_point;
        $find_check = true;
        while($find_check){
            $sql = "select * from tbl_calcroute where start=? or end=?";
            $query = $this->db->query($sql,array($find_point,$find_point));
            if ($query->num_rows($query) <= 0){
                break;
            }
            foreach ($query->result() as $row)
            {
                echo $row->end;
            }
             ///break;
            $find_point = '';
        }
    }
}
