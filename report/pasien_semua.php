<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pasien</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail pasien-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengelolaan Data Pasien Rumah Sakit Umum Kisaran </h2>
                        <h4>Jl. Sisingamangaraja No. 310 Kisaran Asahan<br>Kabupaten Asahan, Sumatera Utara,Indonesia.</h4>
                        <hr>
                        <h3>DATA SELURUH PASIEN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									     <th><center>No.</center></th><th><center>No Rekamedis</center></th><th><center>Nama Pasien</center></th><th><center>Tanggal Lahir</center></th><th><center>Usia</center></th><th><center>Jenis Kelamin</center></th><th><center>Alamat</center></th><th><center>Penyakit</center></th><th><center>No Kamar</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbpasien";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
										 <td><?= $data['no_rm'] ?></td>
										 <td><?= $data['namapasien'] ?></td>
									 <td><?= $data['tanggallahir'] ?></td>
									 <td><?= $data['usia'] ?></td>
                                    <td><?= $data['jeniskelamin'] ?></td>
                                    <td><?= $data['alamatpasien'] ?></td>
									<td><?= $data['penyakit'] ?></td>
									<td><?= $data['noruangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>dr.Kabag Spesialis<strong></u><br>
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