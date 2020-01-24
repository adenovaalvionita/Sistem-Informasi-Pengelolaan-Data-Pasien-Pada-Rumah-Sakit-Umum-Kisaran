<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Transaksi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_rm" class="col-sm-3 control-label">No Rekamedis</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rm" class="form-control" id="inputEmail3" placeholder="No Rekamedis" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="namapasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="namapasien" class="form-control" id="inputEmail3" placeholder="Nama Pasien" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="noruangan" class="col-sm-3 control-label">No Kamar</label>
                            <div class="col-sm-3">
                                <input type="text" name="noruangan" class="form-control" id="inputEmail3" placeholder="No Kamar Pasien" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" name="Harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namadokter" class="col-sm-3 control-label">Nama Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="namadokter"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Dokter" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="spesialis" class="col-sm-3 control-label">Spesialis</label>
                            <div class="col-sm-9">
                                <input type="text" name="spesialis"class="form-control" id="inputEmail3" placeholder="Inputkan Spesialis Dokter" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tglmasuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tglmasuk"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk Pasien" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tglkeluar" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tglkeluar"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Keluar Pasien" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="biaya" class="col-sm-3 control-label">Total Bayar</label>
                            <div class="col-sm-9">
                                <input type="number " name="biaya" class="form-control" id="inputPassword3" placeholder="Inputkan Total Bayar Pasien" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Ket</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan Bayar Pasien" required>
                            </div>
                        </div>
						
						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan Data Transaksi</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=transaksi&actions=tampil" class="btn btn-danger btn-sm">
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
	$norm=$_POST['no_rm'];
	$namapasien=$_POST['namapasien'];
	$noruangan=$_POST['noruangan'];
	$Harga=$_POST['Harga'];
	$namadokter=$_POST['namadokter'];
	$spesialis=$_POST['spesialis'];
	$tglmasuk=$_POST['tglmasuk'];
	$tglkeluar=$_POST['tglkeluar'];
	$biaya=$_POST['biaya'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbtransaksi VALUES ('','$norm','$namapasien','$noruangan','$Harga','$namadokter','$spesialis','$tglmasuk','$tglkeluar','$biaya','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Transaksi Error");
    if ($query){
        echo "<script>window.location.assign('?page=transaksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
