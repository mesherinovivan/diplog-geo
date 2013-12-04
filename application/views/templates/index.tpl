<!DOCTYPE html>
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
    {foreach item=AccountData from=$AccountsData key=iter}
                    {$AccountsData[$iter].Name}<br/>          
    {/foreach}
</body>
</html>