<div class="grid_17" id="isi2">

<h3>PENGUMUMAN</h3>
<?php
foreach($query as $row)
{
    echo "Selamat, perusahaan ".$row->nama_perusahaan." telah memenangkan lelang \"".$row->namalelang."\" (nomor lelang "
            .$row->nomorlelang.") dengan harga tawaran Rp. ".$row->tawaran."<br />";
}

?>

</div>
</div>