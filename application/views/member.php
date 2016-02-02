<div class="grid_17" id="isi2">

<h3>DETAIL MEMBER</h3>
<?php
$this->table->add_row('Username',':',$username);
$this->table->add_row('NPWP',':',$npwp);
$this->table->add_row('Nama Perusahaan',':',$nama_perusahaan);
$this->table->add_row('Alamat',':',$alamat);

echo $this->table->generate();
?>

</div>
</div>