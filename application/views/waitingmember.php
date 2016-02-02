<div class="grid_17" id="isi2">

<h3>Waiting List to Member</h3><br />
<?php
$tmpl = array ( 'table_open'  => '<table border="5px" bordercolor="#FFFFFF" align="center">' );
$this->table->set_template($tmpl);
$this->table->set_heading('NPWP','Nama Perusahaan','Username','Password','Detail','','');
foreach($query as $row)
{
    $this->table->add_row($row->npwp, $row->nama_perusahaan, $row->username, $row->password,
                            anchor("admin/detailw?username=".$row->username, 'detail'),
                            anchor("admin/accept?username=".$row->username, 'accept'),
                            anchor("admin/decline?username=".$row->username, 'decline'));
}

echo $this->table->generate();
?>
</div>


</div>