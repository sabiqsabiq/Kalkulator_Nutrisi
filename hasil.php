<?php
class KalkulatorNutrisi {
  private $berat;
  private $tinggi;

  public function __construct($berat, $tinggi) {
    $this->berat = $berat;
    $this->tinggi = $tinggi;
  }

  public function hitungProtein() {
    return $this->berat * 0.8;
  }

  public function hitungKarbohidrat() {
    return $this->berat * 2;
  }

  public function hitungKalori() {
    return $this->berat * 30;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];

  $kalkulator = new KalkulatorNutrisi($berat, $tinggi);

  $kebutuhanprotein = $kalkulator->hitungProtein();
  $kebutuhankarbohidrat = $kalkulator->hitungKarbohidrat();
  $kebutuhankalori = $kalkulator->hitungKalori();

}
?>

<html>
<head>
  <title>Kalkulator Nutrisi - Kebutuhan Harian</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Hasil Perhitungan Kebuthan Nutrisi</h1>
    <p>Berat Badan: <?php echo $berat; ?> kg</p>
    <p>Tinggi Badan: <?php echo $tinggi; ?> cm</p>
    <p>Protein: <?php echo $kebutuhanprotein; ?> gram</p>
    <p>Karbohidrat: <?php echo $kebutuhankarbohidrat; ?> gram</p>
    <p>Kalori: <?php echo $kebutuhankalori; ?> kalori</p>
    <br>
    <form action="menu.php" method="post">
      <input type="submit" value="Selanjutnya">
      <input type="hidden" name="berat" value="<?php echo $berat; ?>">
      <input type="hidden" name="tinggi" value="<?php echo $tinggi; ?>">
      <input type="hidden" name="kebprotein" value="<?php echo $kebutuhanprotein; ?>">
      <input type="hidden" name="kebkalori" value="<?php echo $kebutuhankalori; ?>">
      <input type="hidden" name="kebkarbohidrat" value="<?php echo $kebutuhankarbohidrat; ?>">
      
    </form>
  </div>
</body>
</html>
