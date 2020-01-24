<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbpasien WHERE idpasien='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pasien</h3>
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
						   
 <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>1980;$i--) {?>
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
                        <!--end tanggal lahir--> 
						 <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="enum" name="jeniskelamin" value="<?=$data['jeniskelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamatpasien" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatpasien" value="<?=$data['alamatpasien']?>"class="form-control" id="inputEmail3" placeholder="Alamat Pasien">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="usia" class="col-sm-3 control-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="usia" value="<?=$data['usia']?>"class="form-control" id="inputEmail3" placeholder="Usia Pasien">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penyakit" class="col-sm-3 control-label">Penyakit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penyakit" value="<?=$data['penyakit']?>"class="form-control" id="inputEmail3" placeholder="penyakit pasien">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noruangan" class="col-sm-3 control-label">Nomor Kamar</label>
                            <div class="col-sm-9">
                                <input type="text" name="noruangan" value="<?=$data['noruangan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-danger">
                                    <span class="fa fa-edit"></span> Update Data Pasien</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pasien&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Data Pasien
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
	$tanggallahir=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
	$jeniskelamin=$_POST['jeniskelamin'];
	$alamatpasien=$_POST['alamatpasien'];
	$usia=$_POST['usia'];
	$penyakit=$_POST['penyakit'];
	$noruangan=$_POST['noruangan'];
    //buat sql
    $sql="UPDATE tbpasien SET no_rm='$no_rm',namapasien='$namapasien',tanggallahir='$tanggallahir',jeniskelamin='$jeniskelamin',alamatpasien='$alamatpasien',usia='$usia',penyakit='$penyakit',
	noruangan='$noruangan' WHERE idpasien='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Pasien Error");
    if ($query){
        echo "<script>window.location.assign('?page=pasien&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



