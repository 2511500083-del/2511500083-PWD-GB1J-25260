<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;

$sesnim = "";
if (isset($_SESSION["sesnim"])):
  $sesnim = $_SESSION["sesnim"];
endif;

$sesnama_lengkap = "";
if (isset($_SESSION["sesnama_lengkap"])):
  $sesnama_lengkap = $_SESSION["sesemail"];
endif;

$sestempat = "";
if (isset($_SESSION["sestempat"])):
  $sestempat = $_SESSION["sestempat"];
endif;

$sestanggal = "";
if (isset($_SESSION["sestanggal"])):
  $sestanggal = $_SESSION["sestanggal"];
endif;

$seshobi = "";
if (isset($_SESSION["seshobi"])):
  $seshobi = $_SESSION["seshobi"];
endif;

$sespasangan = "";
if (isset($_SESSION["sespasangan"])):
  $sespasangan = $_SESSION["sespasangan"];
endif;

$sespekerjaan = "";
if (isset($_SESSION["sespekerjaan"])):
  $sespekerjaan = $_SESSION["sespekerjaan"];
endif;

$sesnama_orangtua = "";
if (isset($_SESSION["sesnama_orangtua"])):
  $sesnama_orangtua = $_SESSION["sesnama_orangtua"];
endif;

$sesnama_kakak = "";
if (isset($_SESSION["sesnama_kakak"])):
  $sesnama_kakak = $_POST["txtNama_Kakak"];
endif;

$sesnama_adik = "";
if (isset($_SESSION["sesnama_adik"])):
  $sesnama_adik = $_POST["txtNama_Adik"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="biodata">
      <h2>Biodata Sederhana Mahasiswa</h2>
      <form action="proses.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan nim anda" required autocomplete="nim">
        </label>

        <label for="txtNama_Lengkap"><span>Nama Lengkap:</span>
          <input type="text" id="txtNama_Lengkap" name="txtNama_Lengkap" placeholder="Masukkan nama lengkap" required autocomplete="nama_lengkap">
        </label>

        <label for="txtTempat"><span>Tempat Lahir:</span>
          <input type="text" id="txtTempat" name="txtTempat" placeholder="Masukkan tempat kelahiran anda" required autocomplete="tempat">  
        </label>

        <label for="txtTanggal"><span>Tanggal Lahir:</span>
          <input type="text" id="txtTanggal" name="txtTanggal" placeholder="Masukkan tanggal kelahiran anda" required autocomplete="tanggal">  
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" placeholder="Masukkan hobi yang anda gemari" required autocomplete="hobi">  
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan nama pasangan anda (jika ada)" required autocomplete="pasangan">  
        </label>

        <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="text" id="txtPekerjaan" name="txtPekerjaan" placeholder="Masukkan pekerjaan anda sekarang" required autocomplete="pekerjaan">  
        </label>

        <label for="txtNama_Orangtua"><span>Nama Orangtua:</span>
          <input type="text" id="txtNama_Orangtua" name="txtNama_Orangtua" placeholder="Masukkan Nama kedua Orangtua anda" required autocomplete="nama_orangtua">  
        </label>

        <label for="txtNama_Kakak"><span>Nama Kakak:</span>
          <input type="text" id="txtNama_Kakak" name="txtNama_Kakak" placeholder="Masukkan nama kakak anda" required autocomplete="nama_kakak">  
        </label>

        <label for="txtNama_Adik"><span>Nama_Adik:</span>
          <input type="text" id="txtNama_Adik" name="txtNama_Adik" placeholder="Masukkan nama adik anda" required autocomplete="nama_adik">  
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>

    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $sesnim;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $sesnama_lengkap ;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $sestempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> <?php echo $sestanggal; ?> </p>
      <p><strong>Hobi:</strong> <?php echo $seshobi; ?></p>
      <p><strong>Pasangan:</strong> <?php echo $sespasangan; ?></p>
      <p><strong>Pekerjaan:</strong> <?php echo $sespekerjaan; ?></p>
      <p><strong>Nama Orang Tua:</strong> <?php echo $sesnama_orangtua; ?></p>
      <p><strong>Nama Kakak:</strong><?php echo $sesnama_kakak; ?></p>
      <p><strong>Nama Adik:</strong> <?php echo $sesnama_adik ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>

    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>