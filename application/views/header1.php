<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/960_24_col.css"); ?>" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/default.css"); ?>" media="all" />
<title>STARDUCKS</title>
</head>

<body>
<div class="container_24">

<div id="header">
<table>
	<tr><td><div class="grid_15" id="logo"></div></td>
    	<td><div class="grid_8" id="login">
<?php
if($sts != "true")
{
echo form_open('user/login');
$un = array(
        'name' => 'username',
        'placeholder' => 'username'
        );
$pw = array(
        'name' => 'password',
        'placeholder' => 'password'
        );
$submit = "<input type=\"submit\" value=\"LOGIN\" />";
$this->table->add_row("Sign in:", form_input($un));
$this->table->add_row("", form_password($pw), $submit);
echo $this->table->generate();
echo form_close();
$su = array('data' => "belum punya akun? ".anchor('user/registrasi','SIGN UP!'),
            'colspan' => 2);
$this->table->add_row("", $su);
echo $this->table->generate();
}
else
{
    echo "Welcome, ".$username;
}
?>
        </div></td>
	</tr>
</table>
</div>
<div class="grid_24" id="page">

<div class="grid_6" id="menu">
<h3>MENU</h3>
<p align="center" style="color:#FFF">--------------------------------------</p>
<ul>
<?php
echo "<li><div class=\"grid_6\" >".anchor('','Home')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('user/syarat','Syarat dan Ketentuan')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('user/daftarlelang','Daftar Lelang')."</div></li>";
echo "<li><div class=\"grid_6\" >".anchor('user/howto','How To')."</div></li>";
if($sts == "true")
{
    echo "<li><div class=\"grid_6\">".anchor('user/pengumuman','Pengumuman')."</div></li>";
    echo "<li><div class=\"grid_6\">".anchor('user/histori','History Lelang')."</div></li>";
    echo "<li><div class=\"grid_6\">".anchor('user/updateprofil','Update Profil')."</div></li>";
    echo "<li><div class=\"grid_6\">".anchor('user/logout','Log Out')."</div></li>";
}
else
{
    echo "<li><div class=\"grid_6\" >".anchor('user/policy','Policy')."</div></li>";
    echo "<li><div class=\"grid_6\" >".anchor('user/aboutus','About Us')."</div></li>";   
}
?>
   	</ul>
</div>