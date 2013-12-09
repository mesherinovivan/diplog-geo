<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 14:15:49
         compiled from "application\views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1139552835f65249682-41212117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f236344f758767274b9f1ae1516c1b2508109a8' => 
    array (
      0 => 'application\\views\\templates\\index.tpl',
      1 => 1384341270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139552835f65249682-41212117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AccountsData' => 0,
    'iter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52835f652ddfd7_27391273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52835f652ddfd7_27391273')) {function content_52835f652ddfd7_27391273($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Toggle Switches</title>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_1.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="switch">
      <input type="radio" class="switch-input" name="view" value="week" id="week" checked>
      <label for="week" class="switch-label switch-label-off">Week</label>
      <input type="radio" class="switch-input" name="view" value="month" id="month">
      <label for="month" class="switch-label switch-label-on">Month</label>
      <span class="switch-selection"></span>
    </div>

    <div class="switch switch-blue">
      <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
      <label for="week2" class="switch-label switch-label-off">Week</label>
      <input type="radio" class="switch-input" name="view2" value="month2" id="month2">
      <label for="month2" class="switch-label switch-label-on">Month</label>
      <span class="switch-selection"></span>
    </div>

    <div class="switch switch-yellow">
      <input type="radio" class="switch-input" name="view3" value="week3" id="week3" checked>
      <label for="week3" class="switch-label switch-label-off">Week</label>
      <input type="radio" class="switch-input" name="view3" value="month3" id="month3">
      <label for="month3" class="switch-label switch-label-on">Month</label>
      <span class="switch-selection"></span>
    </div>
      
      
      
      <input type="radio" class="radio" name="progress" value="five" id="five">
      <input id="progress_value" type="hidden" value="1">
    <label for="five" class="label">5%</label>

    <input type="radio" class="radio" name="progress" value="twentyfive" id="twentyfive" checked>
    <label for="twentyfive" class="label">25%</label>

    <input type="radio" class="radio" name="progress" value="fifty" id="fifty">
    <label for="fifty" class="label">50%</label>

    <input type="radio" class="radio" name="progress" value="seventyfive" id="seventyfive">
    <label for="seventyfive" class="label">75%</label>

    <input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">
    <label for="onehundred" class="label">100%</label>

    <div class="progress">
      <div class="progress-bar"></div>
    </div>
    
  </section>
<script type="text/javascript" src="js/jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.slider.min.js"></script>
<link rel="stylesheet" href="css/jquery.slider.min.css">
 <div class="layout-slider" style="width: 100%">
      Slider <span style="display: inline-block; width: 400px; padding: 0 5px;"><input id="Slider1" type="slider" name="price" value="50" /></span>  in string
    </div>
    <script type="text/javascript" charset="utf-8">
      jQuery("#Slider1").slider({
        from: 0, 
        to: 200, 
        step: 5, 
        dimension: ' концерагеты',
        skin: 'plastic',
        scale: ['-50', '|', '0', '|', '50', '|', '100', '|', '150', '|', '200']
      });
    </script>
    <div class="layout-slider" style="width: 100%">
      Slider <span style="display: inline-block; width: 400px; padding: 0 5px;"><input id="Slider2" type="slider" name="price" value="-0.5;0.5" /></span>  in string
    </div>
    <script type="text/javascript" charset="utf-8">
      jQuery("#Slider2").slider({
        from: -1, 
        to: 1, 
        step: 0.1,
        round: 1, 
        dimension: 'px',
        skin: 'plastic'
      });
    </script>
    <style type="text/css" media="screen">
	  body { background: #EEF0F7; }
	 .layout { padding: 50px; font-family: Georgia, serif; }
	 .layout-slider { margin-bottom: 60px; width: 50%; padding: 20px 0; }
	</style>
    <div class="layout-slider" style="width: 100%;">
      Slider <span style="display: inline-block; width: 400px; padding: 0 5px;"><input id="Slider3" type="text" name="area" value="25;75" /></span>  in string
    </div>
    <?php  $_smarty_tpl->tpl_vars['AccountData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['AccountData']->_loop = false;
 $_smarty_tpl->tpl_vars['iter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AccountsData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['AccountData']->key => $_smarty_tpl->tpl_vars['AccountData']->value){
$_smarty_tpl->tpl_vars['AccountData']->_loop = true;
 $_smarty_tpl->tpl_vars['iter']->value = $_smarty_tpl->tpl_vars['AccountData']->key;
?>
                    <?php echo $_smarty_tpl->tpl_vars['AccountsData']->value[$_smarty_tpl->tpl_vars['iter']->value]['Name'];?>
<br/>          
    <?php } ?>
</body>
</html><?php }} ?>