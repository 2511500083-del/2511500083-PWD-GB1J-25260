<?php
    session_start();
    $sesnama = $_SESSION["sesnama"];
    $sesemail = $_SESSION["sesemail"];
    $sespesan = $_SESSION["sespesan"];
    echo $sesnama . $sesemail . $sespesan;
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
      echo "nama saya Salsabilla";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="about">
      <?php
      $nim = '0344300002';
      $NIM = 2511500083 ;
      $nama_lngkap = "Bilaaaaaaaaaaaaaaaa";
      $Nama_Lengkap = 'Salsabilla Agustin';
      $tmpt_lahir = "Muntok";
      $Tempat_Lahir = 'Desa Air Limau';
      $Tgl_Lahir = "15 Agustus 2007";
      $tanggal_lahir = '15/08/2007';
      $hobi = "Make up & Membaca";
      $Hobi = 'Membaca Novel dan Makeup an';
      $pasangan = "Mingyuuuuuuuuuuu";
      $Pasangan = 'Belum adaa';
      $pekerjaan = "nganggur";
      $Pekerjaan = 'Mahasiswa ISB Atma Luhur 2025';
      $nama_orangtua = "Mama & Papa";
      $Nama_Orangtua = 'Bapak Sarpan dan Ibu Martini';
      $nama_kakak = "ada dehh";
      $Nama_Kakak = 'Febby Candella';
      $nama_adik = "saya adalah anak bungsuuu jadi tdk punya adikk";
      $Nama_Adik = '-';
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama_Lengkap;
        ?> 
      </p>
      <p><strong>Tempat Lahir:</strong>
        <?php
        echo $Tempat_Lahir;
        ?>
      </p>
      <p><strong>Tanggal Lahir:</strong>
        <?php 
        echo $Tgl_Lahir;
        ?>
      </p>
      <p><strong>Hobi:</strong> 
        <?php
        echo $Hobi;
        ?>
      </p>
      <p><strong>Pasangan:</strong> 
        <?php
        echo $Pasangan;
        ?>
      </p>
      <p><strong>Pekerjaan:</strong> 
        <?php
        echo $Pekerjaan; 
        ?>
      </p>
      <p><strong>Nama Orang Tua:</strong> 
        <?php
        echo $Nama_Orangtua;
        ?>
      </p>
      <p><strong>Nama Kakak:</strong> 
        <?php
        echo $Nama_Kakak;
        ?> 
      </p>
      <p><strong>Nama Adik:</strong> 
        <?php
        echo $Nama_Adik;
        ?>
      </p>
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
      <h2>Yang menghubungi kami</h2>
      <p>
        Nama : <strong><?php echo $sesnama ?></strong>
      </p>
      <p>
        Email : <strong><?php echo $sesemail ?></strong>
      </p>
      <p>
        Pesan : <strong><?php echo $sespesan ?></strong>
      </p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Salsabilla Agustin [2511500083]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>