<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Transaksi Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail transaksi-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengelolaan Data Pasien Rumah Sakit Umum Kisaran </h2>
                        <h4>Jl. Sisingamangaraja No. 310 Kisaran Asahan<br>Kabupaten Asahan, Sumatera Utara,Indonesia.</h4>
                        <hr>
                        <h3>DATA SELURUH TRANSAKSI PASIEN BULAN  <? echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
                                 <th>No.</th><th>No Rekamedis</th><th>Nama Pasien</th><th>No Kamar</th><th>Harga Bayar</th><th>Nama Dokter</th><th>Spesialis</th><th>Tanggal Masuk</th><th>Tanggal Keluar</th><th>Total Biaya</th><th>Keterangan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbtransaksi '$ambilthn-$ambilbln'";
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
									<td><?= $data['noruangan'] ?></td>
                                    <td><?= $data['Harga'] ?></td>
                                    <td><?= $data['namadokter'] ?></td>
									<td><?= $data['spesialis'] ?></td>
									<td><?= $data['tglmasuk'] ?></td>
									<td><?= $data['tglkeluar'] ?></td>
									<td><?= $data['bayar'] ?></td>
									<td><?= $data['ket'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                 <td colspan="15" class="text-right">
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
