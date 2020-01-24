<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail pasien-->
                    <?php
                    $sql = "SELECT * FROM tbpasien WHERE idpasien='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">
					<tr>
                            <td>No Rekamedis</td> <td><?= $data['no_rm'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pasien</td> <td><?= $data['namapasien'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tanggallahir'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jeniskelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamatpasien'] ?></td>
                        </tr>
                        <tr>
                            <td>Usia</td> <td><?= $data['usia'] ?></td>
                        </tr>
						<tr>
                            <td>Penyakit</td> <td><?= $data['penyakit'] ?></td>
                        </tr>
						<tr>
                            <td>No Kamar</td> <td><?= $data['noruangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pasien&actions=tampil" class="btn btn-info btn-sm">
                        Kembali ke Data pasien </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

