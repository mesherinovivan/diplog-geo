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
class Accounts_model  extends Base_Model {
    //put your code here
    private $version_sqlserver;
    
    function __construct(){
        parent::__construct();
        $this->view_table = 'vw_Account';
        $this->table = 'vw_Account';
    }
    public function save($data){
        $sql = "insert into ".$this->view_table."(Name,INN) values(?,?)";
        $query = $this->db->query($sql,$data);
    }
    
}

?>
