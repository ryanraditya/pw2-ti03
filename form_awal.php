<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--link bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="mt-5 mx-3">
    <h1>Belanja Online</h1>
    <hr>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-8">
        <form class="form-horizontal"  method="POST">
          <div class="form-group">
            <label for="text" class="control-label col-xs-6">Customer</label>
            <div class="col-xs-6">
              <input id="text" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="radio" class="control-label col-xs-6">Pilih Produk</label>
            <div class="col-xs-6">
              <label class="radio-inline mx-2">
                <input type="radio" name="radio" value="TV">
                TV
              </label>
              <label class="radio-inline mx-2">
                <input type="radio" name="radio" value="KULKAS">
                KULKAS
              </label>
              <label class="radio-inline mx-2">
                <input type="radio" name="radio" value="MESIN CUCI">
                MESIN CUCI
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-6" for="text1">Jumlah</label>
            <div class="col-xs-6">
              <input id="text1" name="jumlah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row mx-5">
            <div class="col-xs-offset-6 col-xs-6">
              <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-4">
        <table class="table">
  <thead class="bg-primary">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">DAFTAR</th>
      <th scope="col">HARGA</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TV</td>
      <td>4.200.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>KULKAS</td>
      <td>3.100.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>MESIN CUCI</td>
      <td>3.800.000</td>
    </tr>
    <hr>
  </tbody>
</table>
    <div class="bg-primary px-5 py-2 ">
      <strong>Harga Bisa Berubah Setiap Saat</strong>
    </div>
      </div>
    </div>
  </div>
  <hr>
  <!--php  starts-->
<?php
$customer = $_POST['customer'];
$radio = $_POST['radio'];
$jumlah = $_POST['jumlah'];
/*$submit = $_POST['submit']; */
$total = 0 ;
// Logika perhitungan
if($radio == 'TV'){
    $total = 4200000 * $jumlah;
} elseif($radio == 'KULKAS'){
    $total = 3100000 * $jumlah;
} elseif($radio == 'MESIN CUCI'){
    $total = 3800000 * $jumlah;
} else {
    echo "Barang yang Anda pilih tidak valid";
}

echo "Nama Customer $customer</br>";
echo "Barang yang dibeli $radio</br>";
echo "Jumlah barang yang dibeli $jumlah</br>";
echo "Dengan harga $total";

?>
  <!--php end-->

  <!--link bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>