<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require "application/libraries/Smarty/libs/Smarty.class.php";

class Smarty_tpl extends Smarty {

function Smarty_tpl(){
    parent::__construct();

    $smarty_dir = "application/libraries/Smarty/libs/";

    $this->setTemplateDir(APPPATH."views/templates");
    $this->setCompileDir(APPPATH."views/templates_c");
    $this->setCacheDir(APPPATH."views/cache");
    $this->setConfigDir(APPPATH."views/config");
    $this->setPluginsDir(array("$smarty_dir/plugins","$smarty_dir/sysplugins/"));
    $this->compile_check=   true;
    $this->force_compile=   true;
    $this->caching=         true;
    $this->cache_lifetime=  86400;
	}
}