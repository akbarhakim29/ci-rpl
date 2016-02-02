<div class="grid_17" id="isi2">

<h3>Buat lelang<br /></h3>

<table align="center" style="font-size:16px; vertical-align:bottom;">
<tr>
<?php
echo form_open("admin/simpanlelang");
?>
<td>Nomor lelang</td><td>:</td><td><input type="text" name="nomor" /></td></tr>
<tr><td>Nama lelang</td><td>:</td><td><input type="text" name="namalelang" /></td></tr>
<tr><td>Deskripsi</td><td>:</td><td><textarea name="deskripsi" rows="5" cols="40"></textarea></td></tr>
<tr><td>Harga lelang</td><td>:</td><td><input type="text" name="harga" /></td></tr>
<tr><td>Tanggal Mulai</td><td>:</td><td><input type="text" name="from" value="<?php echo date("Y-m-d"); ?>" /></td></tr>
<tr><td>Tanggal Akhir</td><td>:</td><td><input type="text" id="datepicker" name="to"  /></td></tr>


<tr><td></td><td></td><td><input type="submit" value="SUBMIT" /></td></tr></form></table>
</div>


</div>