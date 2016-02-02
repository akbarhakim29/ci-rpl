<div class="grid_17" id="isi2">

<h3>Lihat Lelang<br /></h3>
<?php
$tmpl = array ( 'table_open'  => '<table border="5px" bordercolor="#FFFFFF" align="center">' );
$this->table->set_template($tmpl);
$this->table->set_heading('','Nomor Lelang','Nama Lelang','Deskripsi','Kisaran Harga');
foreach($query as $row)
{
    $this->table->add_row(anchor("admin/ranking?nomorlelang=".$row->nomorlelang, 'ranking'),
                            $row->nomorlelang,
                            $row->namalelang,
                            anchor("admin/admdeskripsi?nomorlelang=".$row->nomorlelang, 'lihat deskripsi'),
                            $row->hargalelang);
}

echo $this->table->generate();
?>
</div>


</div>