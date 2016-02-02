<div class="grid_17" id="isi2">

<h3>HISTORY LELANG</h3>
<?php
$tmpl = array ( 'table_open'  => '<table border="5px" bordercolor="#FFFFFF" align="left" style="padding-left:10px">' );
$this->table->set_template($tmpl);
$this->table->set_heading('Nomor Lelang','Nama Lelang','Deskripsi','Harga Tawaran');
foreach($query as $row)
{
    $this->table->add_row($row->nomorlelang, $row->namalelang, $row->desk_tawaran, $row->tawaran);
}

echo $this->table->generate();
?>

</div>
</div>