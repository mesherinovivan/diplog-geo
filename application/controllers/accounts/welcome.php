<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    var $connectionInfo;
    var $serverName;
    var $con;
    function __construct() 
    {
        parent::__construct();
		
		//$this->load->library('ion_auth');
		///$this->load->library('session');
		////$this->load->database();
		////$this->load->helper('url');
            $this->load->library("smarty_tpl");
            ////$this->load->model('accounts_model');
    }
  
    public function index()
    {       
	
     /*   $data = $this->accounts_model->getObjectsList(0,20);
	$this->smarty_tpl->assign("AccountsData",$data);*/
        $this->smarty_tpl->assign("PAGE_TITLE",'Контрагенты');
	$this->smarty_tpl->display("maps/maps.tpl");	
    }
    /*
    public function edit(){
        $this->smarty_tpl->assign("PAGE_TITLE",'Контрагенты');
	$this->smarty_tpl->display("accounts_edit.tpl");
    }
    public function save(){
    echo    $this->input->post('Name');
        $data = array('Name'=>$_POST['Name'],'INN'=>$_POST['INN']);
        $data = $this->accounts_model->save($data);
    }
     * 
     */
}