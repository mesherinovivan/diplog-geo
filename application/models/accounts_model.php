<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accounts_model
 *
 * @author i_mesherinov
 */
class Accounts_model  extends CI_Model {
    //put your code here
 
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function list_accounts(){
        $this->db->select('*');
        $this->db->from('tbl_account');
        $query = $this->db->get();
        return $query->result('array');
    }
    
}

?>
