<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() 
    {
        parent::__construct();
        $this->load->library("smarty_tpl");
    }
    public function index()
    {
        if (!isset($_SESSION['is_auth'])&& !empty($_SESSION['is_auth'])){
            $this->smarty_tpl->assign("PAGE_TITLE",'Контрагенты');
            $this->smarty_tpl->display("login.tpl");
        }
        else{
            
        }
        
    }
}
