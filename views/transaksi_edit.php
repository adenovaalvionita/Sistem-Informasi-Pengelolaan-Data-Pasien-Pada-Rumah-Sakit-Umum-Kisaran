<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbtransaksi WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Transaksi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                                       <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_rm" class="col-sm-3 control-label">No Rekamedis</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rm" value="<?=$data['no_rm']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rekamedis">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="namapasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="namapasien" value="<?=$data['namapasien']?>"class="form-control" id="inputEmail3" placeholder="Nama Pasien">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="noruangan" class="col-sm-3 control-label">No Kamar</label>
                            <div class="col-sm-3">
                                <input type="text" name="noruangan" value="<?=$data['noruangan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kamar">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" name="Harga" value="<?=$data['Harga']?>"class="form-control" id="inputEmail3" placeholder="Harga Kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namadokter" class="col-sm-3 control-label">Nama Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="namadokter" value="<?=$data['namadokter']?>"class="form-control" id="inputEmail3" placeholder="Nama Dokter">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="spesialis" class="col-sm-3 control-label">Spesialis</label>
                            <div class="col-sm-9">
                                <input type="text" name="spesialis" value="<?=$data['spesialis']?>"class="form-control" id="inputEmail3" placeholder="Spesialis Dokter">
                            </div>
                        </div>
						
						 <!--untuk tanggal masuk form tahun-bulan-tanggal 2010-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>2010;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal masuk--> 
						
						 <!--untuk tanggal keluar form tahun-bulan-tanggal 2010-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Keluar</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>2010;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal keluar--> 
						
						<div class="form-group">
                            <label for="bayar" class="col-sm-3 control-label">Total Bayar</label>
                            <div class="col-sm-9">
                                <input type="number" name="bayar" value="<?=$data['bayar']?>"class="form-control" id="inputEmail3" placeholder="Total Bayar ">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Ket</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>"class="form-control" id="inputEmail3" placeholder="Ket">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Transaksi</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=trasnsaksi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Transaksi
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
		$no_rm=$_POST['no_rm'];
	$namapasien=$_POST['namapasien'];
	$noruangan=$_POST['noruangan'];
	$Harga=$_POST['Harga'];
	$namadokter=$_POST['namadokter'];
	$spesialis=$_POST['spesialis'];
	$tglmasuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
	$tglkeluar=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
	$bayar=$_POST['bayar'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE tbtransaksi SET  no_rm='$no_rm',namapasien='$namapasien',noruangan='$noruangan',Harga='$Harga',namadokter='$namadokter',spesialis='$spesialis',tglmasuk='$tglmasuk',
	tglkeluar='$tglkeluar',bayar='$bayar',ket='$ket' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Transaksi Error");
    if ($query){
        echo "<script>window.location.assign('?page=transaksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



