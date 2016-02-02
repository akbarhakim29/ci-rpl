<div class="grid_17" id="isi2">

<h3>RANKING LELANG</h3>
<?php
$tmpl = array ( 'table_open'  => '<table border="5px" bordercolor="#FFFFFF" align="center">' );
$this->table->set_template($tmpl);
$this->table->set_heading('Ranking','Nomor Lelang','Nama Lelang','Username','Nama Perusahaan','Harga Tawaran','');
$ended = false;
foreach($query as $row)
{
    if($row->keterangan == "pemenang") $ended = true;
}
$i = 0;
foreach($query as $row)
{
    if(!$ended)
    {
        $pilih = anchor("admin/pilihpemenang?username=".$row->username."&nomorlelang=".$row->nomorlelang, "pilih pemenang");
    }
    else
    {
        $pilih = $row->keterangan;
    }
    $i++;
    $this->table->add_row($i, $row->nomorlelang, $row->namalelang, 
                            anchor("admin/member?username=".$row->username, $row->username), 
                            $row->nama_perusahaan, $row->tawaran, $pilih);
}

echo $this->table->generate();
?>

</div>
</div>