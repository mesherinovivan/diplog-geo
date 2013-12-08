<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->library("smarty_tpl");
        $this->load->helper('url');
        $this->load->model('users');
        session_start();
        /*
        $_SESSION['is_auth'] = true;
     * 
     */
    }
    public function auth(){
        $login = $_POST['user_name'];
        $pwd = $_POST['user_password'];
        if (!$this->users->auth($login,$pwd)){
            redirect('/login/'); 
        }
        else {
           redirect('/accounts/'); 
        }
    }
    public function index()
    {
       if (!isset($_SESSION['is_auth'])&& empty($_SESSION['is_auth'])){
            $this->smarty_tpl->assign("PAGE_TITLE",'Вход в систему');
            $this->smarty_tpl->display("login.tpl");
        }
        else{
           redirect('/accounts/welcome/'); 
        }
    }
}
