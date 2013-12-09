<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of invoice
 *
 * @author i_mesherinov
 */
class Invoices extends CI_Controller {
    //put your code here
    function __construct() 
    {
        parent::__construct();
        $this->load->library("smarty_tpl");
        $this->load->helper('url');
        $this->load->model('invoice_model');
        session_start();
        if (!isset($_SESSION['is_auth'])&& empty($_SESSION['is_auth'])){
             redirect('/login/'); 
        }
    }
    public function index()
    {
        $data = $this->invoice_model->list_invoices();
        $this->smarty_tpl->assign("PAGE_TITLE",'Счета');
        $this->smarty_tpl->assign("data",$data);
        $this->smarty_tpl->assign("base_url", base_url());
        $this->smarty_tpl->assign("maps_selected", '');
        $this->smarty_tpl->assign("account_selected", '');
        $this->smarty_tpl->assign("invoice_selected", 'selected');
        $this->smarty_tpl->assign("settings_selected", ''); 
        $this->smarty_tpl->display("invoice_list.tpl");
    }
        public function getaddress(){
            $territory_ids = $this->input->post('territory_ids'); 
            $data_invoice = $this->input->post('data_invoice'); 
            $data = $this->invoice_model->getaddress($territory_ids,$data_invoice);
            print_r($data);
        }
}

?>
