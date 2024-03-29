
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include_once "componens/navbar.php"; ?>
        <div id="layoutSidenav">
            <?php include_once "componens/sidebar.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container mt-5">
        <h2 class="text-center">Data Pasien</h2>
        <a href="form_pasien.php"><button class="btn btn-primary mb-1">Tambah Data</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Kelurahan ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
require 'dbkoneksi.php';

// Query untuk mendapatkan data pasien
$query = $dbh->query('SELECT * FROM pasien');

// Loop menggunakan foreach untuk menampilkan data pasien
foreach ($query as $row) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['kode'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['tmp_lahir'] . "</td>";
    echo "<td>" . $row['tgl_lahir'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['kelurahan_id'] . "</td>";
    echo "</tr>";
}
?>
            </tbody>
        </table>
    </div>

                </main>
                <?php include_once "componens/footer.php"; ?>
            </div>
        </div>
            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
