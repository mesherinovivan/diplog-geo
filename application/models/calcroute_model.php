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
        ////$this->db->empty_table('tbl_calcroute');
        $this->db->insert('tbl_calcroute', $param); 
    }
    public function min_length($start_point){
        $find_point = $start_point;
        $point_array[] = $find_point;
        $not_in = '"'.$find_point.'"';
        for ($i=0; $i<7; $i++){
            $sql = "select * from tbl_calcroute where start=? and not end in(".$not_in.")";
            $query = $this->db->query($sql,array($find_point));
            if ($query->num_rows($query) <= 0){
                break;
            }
            $row = $query->result('array');
            $find_point = $row[0]['end'];     
            $min = $row[0]['len'];
            for ($j=0; $j<count($row);$j++){
                if (in_array($row[$j]['end'],$point_array)){
                    continue;
                }
                if ($min > $row[$j]['len']){
                    $min = $row[$j]['len'];
                    $find_point = $row[$j]['end'];
                }
            }
            if (in_array($find_point,$point_array)){
                    continue;
            }
            $point_array[] = $find_point;
            $not_in = $not_in.',"'.$find_point.'"';
           
        }
        return json_encode($point_array);
    }
}
