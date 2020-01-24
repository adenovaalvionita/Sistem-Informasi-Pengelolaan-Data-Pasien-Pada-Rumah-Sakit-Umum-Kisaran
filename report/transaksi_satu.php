<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Transaksi Pasien</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail transaksi-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbtransaksi WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengelolaan Data Pasien Rumah Sakit Umum Kisaran </h2>
                        <h4>Jl. Sisingamangaraja No. 310 Kisaran Asahan<br>Kabupaten Asahan, Sumatera Utara,Indonesia.</h4>
                        <hr>
                        <h3>DATA TRANSAKSI PASIEN</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>No Rekamedis</td> <td><?= $data['no_rm'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pasien</td> <td><?= $data['namapasien'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">No Kamar</td> <td><?= $data['noruangan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td> <td><strong><?= $data['Harga'] ?></td>
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
                                    <td>Total Bayar</td> <td><?= $data['bayar'] ?> </td>
                                </tr>
								<tr>
                                    <td>Ket</td> <td><?= $data['ket'] ?> </td>
                                </tr>
								

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>dr spesialis,<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
