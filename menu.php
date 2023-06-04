<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];
  $kebutuhanprotein = $_POST['kebprotein'];
  $kebutuhankalori = $_POST['kebkalori'];
  $kebutuhankarbohidrat = $_POST['kebkarbohidrat'];

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Nutrisi - Pilihan Makanan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
  <h1>Hasil Perhitungan Kebutuhan Nutrisi</h1>
    <p>Berat Badan: <?php echo $berat; ?> kg</p>
    <p>Tinggi Badan: <?php echo $tinggi; ?> cm</p>
    <p>Protein: <?php echo $kebutuhanprotein; ?> gram</p>
    <p>Karbohidrat: <?php echo $kebutuhankarbohidrat; ?> gram</p>
    <p>Kalori: <?php echo $kebutuhankalori; ?> kalori</p>
    <br>
    <h1>Pilihan Makanan</h1>
    <form action="output.php" method="post">
      <label for="paket">Pilih Paket Makanan:</label>
      <p>Nasi Padang Ayam Bakar : 20g protein, 60g karbohidrat, 750 kalori</p>
      <p>Sate Padang: 10g protein, 60g karbohidrat, 600 kalori</p>
      <select id="paket" name="paket">
        <option value="paket1">Paket 1 - Nasi Padang Ayam Bakar</option>
        <option value="paket2">Paket 2 - Sate Padang</option>
      </select><br><br>
      <label for="jumlah">Jumlah Porsi:</label>
      <input type="number" id="jumlah" name="jumlah" required><br><br>
      <input type="submit" value="Hitung">
      <input type="hidden" name="berat" value="<?php echo $berat; ?>">
      <input type="hidden" name="tinggi" value="<?php echo $tinggi; ?>">
      <input type="hidden" name="kebprotein" value="<?php echo $kebutuhanprotein; ?>">
      <input type="hidden" name="kebkalori" value="<?php echo $kebutuhankalori; ?>">
      <input type="hidden" name="kebkarbohidrat" value="<?php echo $kebutuhankarbohidrat; ?>">
    </form>
  </div>
</body>
</html>
