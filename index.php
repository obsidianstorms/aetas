<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include_once 'includes.php';?>
<link rel="stylesheet" href="reset.css" type="text/css" />
<link rel="stylesheet" href="main.css" type="text/css" />
<script src="schedule.js" type="text/javascript"></script>
<!--script src="utils.js" type="text/javascript"></script-->
<!--script type="text/javascript" language="Javascript"></script-->
<title><?php echo $title;?></head>

</head>
<body>
  <div id="wrapper">
    <div id="header">
    </div> <!-- id="header"-->
    <div id="menu">
	<?php 
	echo "<ul>";
	for($i=0;$i<count($menu);$i++){
	  echo "<li><a href='".$menu[$i].".php'>".$menu[$i]."</a></li>";
	}
	echo "</ul>";
	?>
	
    </div> <!-- id="menu"-->
    <div id="main">
	<div id="content">
	  <div id="schedule_table"><?php include 'schedule.php'; ?></div>
	</div>
    </div> <!-- id="main"-->
    <div id="footer"><?php echo $copyright; ?>
    </div> <!-- id="footer"-->
    
  </div> <!-- id="wrapper"-->
</body>
</html>
<script type="text/javascript">window.onload = after_page_load;</script>