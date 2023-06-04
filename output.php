<?php
class KalkulatorNutrisi {
 
  private $paket;
  private $jumlah;

  public function __construct($paket, $jumlah) {
    $this->paket = $paket;
    $this->jumlah = $jumlah;
  }

  public function jumlahProtein() {
    if ($this->paket === 'paket1') {
      return $this->jumlah * 20;
    } elseif ($this->paket === 'paket2') {
      return $this->jumlah * 10;
    }
  }

  public function jumlahKarbohidrat() {
    return $this->jumlah * 60;
  }

  public function jumlahKalori() {
    if ($this->paket === 'paket1') {
      return $this->jumlah * 750;
    } elseif ($this->paket === 'paket2') {
      return $this->jumlah * 600;
    }
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];  
  $paket = $_POST['paket'];
  $jumlah = $_POST['jumlah'];
  $kebutuhanprotein = $_POST['kebprotein'];
  $kebutuhankalori = $_POST['kebkalori'];
  $kebutuhankarbohidrat = $_POST['kebkarbohidrat'];

  $kalkulator = new KalkulatorNutrisi ($paket, $jumlah);

  $protein = $kalkulator->jumlahProtein();
  $karbohidrat = $kalkulator->jumlahKarbohidrat();
  $kalori = $kalkulator->jumlahKalori();

  if ($protein >= $kebutuhanprotein && $karbohidrat >= $kebutuhankarbohidrat && $kalori >= $kebutuhankalori) {
    $pesan = "Selamat,kamu telah memenuhi kebutuhan harian mu.";
  }
  else {
    $pesan = "Kebutuhan harian mu belum terpenuhi";
  }

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Nutrisi - Hasil</title>
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
    <h1>Hasil Perhitungan Nutrisi</h1>
    <p>Paket Makanan: <?php echo $paket; ?></p>
    <p>Jumlah Porsi: <?php echo $jumlah; ?></p>
    <p>Protein: <?php echo $protein; ?> gram</p>
    <p>Karbohidrat: <?php echo $karbohidrat; ?> gram</p>
    <p>Kalori: <?php echo $kalori; ?> kalori</p>
    <br>
    <p><?php echo $pesan; ?></p>
    <br>
    <form action="index.html" method="get">
      <input type="submit" value="Kembali">
    </form>
  </div>
</body>
</html>
