<div class="grid_17" id="isi2">

<h3>DESKRIPSI LELANG</h3>
<?php
$this->table->add_row('Nomor lelang',':',$nomorlelang);
$this->table->add_row('Nama lelang',':',$namalelang);
$this->table->add_row('Deskripsi',':',$deskripsi);
$this->table->add_row('Kisaran harga',':',$hargalelang);

echo $this->table->generate();
?>

</div>
</div>