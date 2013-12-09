<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accounts
 *
 * @author Ivan
 */
class Accounts extends CI_Controller {
    //put your code here
    function __construct() 
    {
        parent::__construct();
        $this->load->library("smarty_tpl");
        $this->load->helper('url');
        $this->load->model('accounts_model');
        $this->load->model('calcroute_model');
        session_start();
        if (!isset($_SESSION['is_auth'])&& empty($_SESSION['is_auth'])){
             redirect('/login/'); 
        }
    }
    public function index()
    {
        $data = $this->accounts_model->list_accounts();
        $this->smarty_tpl->assign("PAGE_TITLE",'Контрагенты');
        $this->smarty_tpl->assign("data",$data);
        $this->smarty_tpl->assign("base_url", base_url());
                $this->smarty_tpl->assign("maps_selected", '');
        $this->smarty_tpl->assign("account_selected", 'selected');
        $this->smarty_tpl->assign("invoice_selected", '');
        $this->smarty_tpl->assign("settings_selected", '');
        
        $this->smarty_tpl->display("accounts_list.tpl");
    }
    public function setpoint($start_p,$end_p,$length_p){
        /*$params = array('start'=>urldecode($start_p),
                        'end'=>urldecode($end_p),
                        'len'=>urldecode($length_p));
        $this->calcroute_model->set_row_route($params);
*/
         echo $this->calcroute_model->min_length('Оренбург 60 Лет октября 2Г');
    }
}
