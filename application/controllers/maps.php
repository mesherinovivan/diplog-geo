<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of maps
 *
 * @author i_mesherinov
 */
class Maps extends CI_Controller {
    //put your code here
    function __construct() 
    {
        parent::__construct();
        $this->load->library("smarty_tpl");
        $this->load->helper('url');
        $this->load->model('calcroute_model');
        session_start();
        if (!isset($_SESSION['is_auth'])&& empty($_SESSION['is_auth'])){
             redirect('/login/'); 
        }
    }
    public function index()
    {
        $this->smarty_tpl->assign("PAGE_TITLE",'Карта');
        $this->smarty_tpl->assign("base_url", base_url());
        $this->smarty_tpl->assign("maps_selected", 'selected');
        $this->smarty_tpl->assign("account_selected", '');
        $this->smarty_tpl->assign("invoice_selected", '');
        $this->smarty_tpl->assign("settings_selected", '');
        $this->smarty_tpl->display("maps/maps.tpl");
    }
}

?>
