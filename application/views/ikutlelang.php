<div class="grid_17" id="isi2">

<h3>IKUT LELANG</h3>
<table align="center" style="font-size:16px; vertical-align:bottom;">
<tr>
<?php
	echo form_open_multipart('user/ikutlelang');
?>
<td>Nomor lelang</td><td>:</td><td><?php echo $nomorlelang ?></td></tr>
<tr><td>Nama lelang</td><td>:</td><td><?php echo $namalelang ?></td></tr>
<tr><td>Deskripsi</td><td>:</td><td><textarea name="desk_tawaran" rows="5" cols="40" required="required"></textarea></td></tr>
<tr><td>Harga Tawaran</td><td>:</td><td><input type="text" name="tawaran" required="required"/></td></tr>
<tr><td>pilih gambar produk</td><td>:</td><td><input name="userfile" type="file" />(must be .jpg) <br /> </td></tr>
<?php
	echo form_hidden('nomorlelang', $nomorlelang);
    echo form_hidden('namalelang', $namalelang);
?> 
<tr><td></td><td></td><td><input type="submit" value="SUBMIT" /></td></tr></form></table>

</table>

</div>
</div>