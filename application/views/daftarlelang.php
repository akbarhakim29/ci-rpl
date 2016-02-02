<div class="grid_17" id="isi2">

<h3>DAFTAR LELANG</h3>
<?php
$tmpl = array ( 'table_open'  => '<table border="5px" bordercolor="#FFFFFF" align="center">' );
$this->table->set_template($tmpl);
$this->table->set_heading('--','Nomor Lelang','Nama Lelang','Deskripsi','Kisaran Harga','Dateline');
foreach($query as $row)
{
    foreach($query2 as $row2)
    {	if($row->nomorlelang == $row2->nomorlelang)
        {
        if($sts == "true")
        {	
			if($row->waktuakhir <= date("Y-m-d")){
				$pilih="end";
				}	
            else if($row2->username != NULL)
            $pilih = "terpilih";
            else
            $pilih = anchor("user/pilihlelang?nomorlelang=".$row->nomorlelang, 'pilih');
        }
        else $pilih = "";
        $this->table->add_row($pilih,
                            $row->nomorlelang,
                            $row->namalelang,
                            anchor("user/deskripsi?nomorlelang=".$row->nomorlelang, 'lihat deskripsi'),
                            $row->hargalelang,
							$row->waktuakhir);
        }
    }
}

echo $this->table->generate();
?>

</div>
</div>