<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_rm" class="col-sm-3 control-label">No Rekamedis</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rm" class="form-control" id="inputEmail3" placeholder="Inputkan No Rekamedis" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="namapasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="namapasien" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pasien" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tanggallahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggallahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Pasien" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="enum" name="jeniskelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin Pasien" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamatpasien" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatpasien"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Pasien" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="usia" class="col-sm-3 control-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="usia"class="form-control" id="inputEmail3" placeholder="Inputkan Usia Pasien" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penyakit" class="col-sm-3 control-label">Penyakit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penyakit"class="form-control" id="inputEmail3" placeholder="Inputkan Penyakit Pasien" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noruangan" class="col-sm-3 control-label">Nomor Kamar</label>
                            <div class="col-sm-9">
                                <input type="text" name="noruangan" class="form-control" id="inputPassword3" placeholder="Inputkan No Kamar Pasien" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-warning">
                                    <span class="fa fa-save"></span> Simpan Data Pasien</button>
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
	$norm=$_POST['no_rm'];
	$nama=$_POST['namapasien'];
	$tanggallahir=$_POST['tanggallahir'];
	$jk=$_POST['jeniskelamin'];
  $alamat=$_POST['alamatpasien'];
	$usia=$_POST['usia'];
  $penyakit=$_POST['penyakit'];
  $no=$_POST['noruangan'];
    //buat sql
    $sql="INSERT INTO tbpasien VALUES ('','$norm','$nama','$tanggallahir','$jk','$alamat','$usia','$penyakit','$no')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Pasien Error");
    if ($query){
        echo "<script>window.location.assign('?page=pasien&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
