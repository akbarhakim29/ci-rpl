<div class="grid_17" id="isi2">

<h3>Lihat Member</h3><br />
<?php
$tmpl = array ( 'table_open'  => '<table border="5px" bordercolor="#FFFFFF" align="center">' );
$this->table->set_template($tmpl);
$this->table->set_heading('NPWP','Nama Perusahaan','Username','Password','Detail','');
foreach($query as $row)
{
    if($mode == "admin") $hapus = anchor("admin/hapus?username=".$row->username, 'hapus');
    else $hapus = "";
    $this->table->add_row($row->npwp, $row->nama_perusahaan, $row->username, $row->password,
                            anchor("admin/detailm?username=".$row->username, 'detail'),
                            $hapus);
}

echo $this->table->generate();
?>
</div>


</div>