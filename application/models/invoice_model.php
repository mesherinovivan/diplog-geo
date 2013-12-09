<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of invoice_model
 *
 * @author i_mesherinov
 */
class Invoice_model extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function list_invoices(){
        $sql = "select ac.name as accountname, invoice_date, amount from tbl_invoice
                left join
                tbl_account as ac on ac.id = tbl_invoice.account_id
            ";
        $query = $this->db->query($sql,array());
        return $query->result('array');
    }
    public function getaddress($territory_ids,$data_invoice){
        $sql = "select 
                    ac.name as accountname, 
                    ac.address as address,
                    invoice_date, 
                    amount 
                from tbl_invoice
                left join
                tbl_account as ac on ac.id = tbl_invoice.account_id
                where ac.territory_id in (".implode(',',$territory_ids).") and DATE_FORMAT(invoice_date, '%d.%m.%Y')=?";
        $query = $this->db->query($sql,array($data_invoice));
        return json_encode($query->result('array'));
        
    }
}

?>
