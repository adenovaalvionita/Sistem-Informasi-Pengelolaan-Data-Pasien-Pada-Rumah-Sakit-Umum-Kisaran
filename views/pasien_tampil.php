<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-30">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                 <th>No.</th><th>No Rekamedis</th><th>Nama Pasien</th><th>Jenis Kelamin</th><th>Alamat</th><th>Usia</th><th>Penyakit</th><th>No Kamar</th><th>ACTIONS</th>
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
                                    <td><?= $data['jeniskelamin'] ?></td>
                                    <td><?= $data['alamatpasien'] ?></td>
									<td><?= $data['usia'] ?></td>
									<td><?= $data['penyakit'] ?></td>
									<td><?= $data['noruangan'] ?></td>
                                    <td>
                                        <a href="?page=pasien&actions=detail&id=<?= $data['idpasien'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=pasien&actions=edit&id=<?= $data['idpasien'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                   
                                        <a href="?page=pasien&actions=delete&id=<?= $data['idpasien'] ?>" class="btn btn-danger btn-xs">
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
                                    <a href="?page=pasien&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Pasien

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

