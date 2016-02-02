<div class="grid_17" id="isi1">

<h3>UPDATE PROFIL</h3>
<?php

echo form_open_multipart('user/simpanProfil');
$this->table->add_row('Username',':',$username);
$this->table->add_row('Password',':',form_password('password',$password));
$this->table->add_row('Konfirmasi Password',':',form_password('konfirmpass'));
$this->table->add_row("<br><br>");
$this->table->add_row('NPWP',':',$npwp);
$this->table->add_row('Nama Perusahaan',':',form_input('perusahaan',$nama_perusahaan));
$this->table->add_row('Alamat Perusahaan',':',form_textarea('alamat',$alamat));
$optpropinsi = array(
                  'pilih propinsi' => '-----pilih propinsi-----',
                  '111' => 'Aceh',
                  '112' => 'Jatim',
                  '113' => 'Jateng',
                );
$this->table->add_row('Propinsi',':',form_dropdown('propinsi',$optpropinsi,$provinsi));
$optkota = array(
                  'pilih kota' => '-----pilih kota-----',
                  '111' => 'Sidoarjo',
                  '112' => 'Malang',
                  '113' => 'Kediri',
                );
$this->table->add_row('Propinsi',':',form_dropdown('kota',$optkota,$kota));
$this->table->add_row('Kode Pos',':',form_input('pos',$kode_pos));
$this->table->add_row('Telepon',':',form_input('telp',$telepon));
$this->table->add_row('Fax.',':',form_input('fax',$faxsimile));
$this->table->add_row('Email',':',form_input('email',$email));
$this->table->add_row('Nama Pengurus',':',form_input('pengurus',$nama_pengurus));
$this->table->add_row('Jabatan',':',form_input('jabatan',$jabatan));
$this->table->add_row('Pilih file untuk diupload',':',form_upload('userfile',$file_upload).'(.rar/.zip)');
echo $this->table->generate();
echo form_hidden('username',$username);
echo form_hidden('npwp',$npwp);
echo form_hidden('oldfile',$file_upload);
echo form_submit('submit','submit');
echo form_close();

/*<table>
<tr>
<?php
echo form_open_multipart("user/simpanprofil"); 
?>
<td>Username</td><td>:</td><td><?php echo $username ?></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password" value="<?php echo $password ?>" /></td></tr>
<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="konfirmpass" /></td></tr>

<tr><td><br /><br /></td></tr>
<tr><td>NPWP</td><td>:</td><td><?php echo $npwp ?></td></tr>
<tr><td>Nama Perusahaan</td><td>:</td><td><input type="text" name="perusahaan" value="<?php echo $nama_perusahaan ?>" /></td></tr>
<tr><td>Alamat perusahaan</td><td>:</td><td><input type="text" name="alamat" value="<?php echo $alamat ?>" /></td></tr>
<tr><td>Propinsi perusahaan</td><td>:</td><td>
<select name="propinsi">
<option value="pilih propinsi" />-----pilih propinsi-----</option>
<option value="111" <?php if($provinsi == "111") echo "selected=\"\"" ?> />aceh</option>
<option value="112" <?php if($provinsi == "112") echo "selected=\"\"" ?> />jatim</option>
<option value="113" <?php if($provinsi == "113") echo "selected=\"\"" ?> />jateng</option>
</select>
</td></tr>
<tr><td>Kota perusahaan</td><td>:</td><td>
<select name="kota">
<option value="pilih kota" />-----pilih kota-----</option>
<option value="111" <?php if($kota == "111") echo "selected=\"\"" ?> />sidoarjo</option>
<option value="112" <?php if($kota == "112") echo "selected=\"\"" ?> />malang</option>
<option value="113" <?php if($kota == "113") echo "selected=\"\"" ?> />kediri</option>
</select>
</td></tr>
<tr ><td>Kode pos perusahaan</td><td>:</td><td><input type="text" name="pos" value="<?php echo $kode_pos ?>" /></td></tr>
<tr ><td>Telepon perusahaan</td><td>:</td><td><input type="text" name="telp" value="<?php echo $telepon ?>" /></td></tr>
<tr ><td>Fax. perusahaan</td><td>:</td><td><input type="text" name="fax" value="<?php echo $faxsimile ?>" /></td></tr>
<tr ><td>Email perusahaan</td><td>:</td><td><input type="text" name="email" value="<?php echo $email ?>" /></td></tr><br />
<tr ><td>Nama Pengurus</td><td>:</td><td><input type="text" name="pengurus" value="<?php echo $nama_pengurus ?>" /></td></tr>
<tr ><td>Jabatan</td><td>:</td><td><input type="text" name="jabatan" value="<?php echo $jabatan ?>" /></td></tr>
<tr><td>pilih file untuk di upload</td><td>:</td><td><input name="userfile" type="file" />(.rar/.zip) <br /> </td>  </tr>
<?php
echo form_hidden('username',$username);
echo form_hidden('npwp',$npwp);
echo form_hidden('oldfile',$file_upload);
?>   
<tr ><td></td><td></td><td><input type="submit" value="submit" /></td></tr>
</form></tr></table>*/
?>

</div>
</div>