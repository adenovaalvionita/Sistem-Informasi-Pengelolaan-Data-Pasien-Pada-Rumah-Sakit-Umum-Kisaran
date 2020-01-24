<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Transaksi</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail transaksi-->
                    <?php
                    $sql = "SELECT * FROM tbtransaksi WHERE id='" . $_GET ['id'] . "'";
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
                            <td>No Kamar</td> <td><?= $data['noruangan'] ?></td>
                        </tr>
						<tr>
                            <td>Harga </td> <td><?= $data['Harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Dokter</td> <td><?= $data['namadokter'] ?></td>
                        </tr>
                        <tr>
                            <td>Spesialis</td> <td><?= $data['spesialis'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tglmasuk'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Keluar</td> <td><?= $data['tglkeluar'] ?></td>
                        </tr>
						<tr>
                            <td>Total Bayar</td> <td><?= $data['bayar'] ?></td>
                        </tr>
						<tr>
                            <td>Ket</td> <td><?= $data['ket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=transaksi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Transaksi </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

