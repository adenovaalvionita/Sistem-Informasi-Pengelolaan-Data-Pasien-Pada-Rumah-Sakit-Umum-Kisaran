<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-30">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Transaksi</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                 <th>No.</th><th>No Rekamedis</th><th>Nama Pasien</th><th>No Kamar</th><th>Harga Bayar</th><th>Nama Dokter</th><th>Spesialis</th><th>Tanggal Masuk</th><th>Tanggal Keluar</th><th>Total Biaya</th><th>Keterangan</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbtransaksi";
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
                                    <td>
                                        <a href="?page=transaksi&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=transaksi&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                   
                                        <a href="?page=transaksi&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=transaksi&actions=tambah" class="btn btn-danger btn-sm">
                                        Tambah Data Transaksi

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

