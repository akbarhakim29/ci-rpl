<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/960_24_col.css"); ?>" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/default2.css"); ?>" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>jqueryui/development-bundle/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url();?>jqueryui/development-bundle/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>jqueryui/development-bundle/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>jqueryui/development-bundle/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>jqueryui/development-bundle/ui/jquery.ui.datepicker.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
<title>STARDUCKS</title>
</head>

<body>
<div class="container_24">

<div id="header">
<table>
	<tr><td><div class="grid_15" id="logo"></div></td>
    	<td><div class="grid_8" id="login"></div></td>
	</tr>
</table>
</div>
<div class="grid_24" id="page">

<div class="grid_6" id="menu">
<h3>MENU ADMIN</h3>
<p align="center" style="color:#FFF">--------------------------------------</p>
<ul>
<?php
echo "<li><div class=\"grid_6\" >".anchor('admin/admindex','Admin Home')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('admin/buatlelang','Buat Lelang')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('admin/lihatlelang','Lihat Lelang')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('admin/waitinglist','Waiting List')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('admin/lihatmember','Member Lelang')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('admin/admlogout','Log Out')."</div></li>";
?>
   	</ul>
</div>