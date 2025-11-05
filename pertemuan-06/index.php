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
            <p>Ini contoh paragraf HTML.</p>
            <?php
           echo "Halo Dunia!<br>";
           echo "Nama Saya Salsabilla!";
            ?>
        </section>

        <section id="about">
            <?php
            $NIM = "2511500083";
            $nim = "2511500222";
            $Nim = "";
            $Nama_Lengkap = "Salsabilla Agustin";
            $nama_lengkap = "salsabilla agustin";
            $Tempat_Lahir = "Desa Air Limau";
            $Tanggal_Lahir = "15 Agustus 2007";
            $Hobi = "Membaca Novel dan Makeup";
            $Pasangan = "Belum Ada &#9786; ";
            $Pekerjaan = "Mahasiswa di ISB Atma Luhur &copy; 2025";
            $Nama_OrangTua = "Bapak Sarpan dan Ibu Martini ";
            $Nama_Kakak = "Febby Candella";
            $Nama_Adik = "-";
            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong><?php echo $NIM ?></p>
            <p><strong>Nama Lengkap:</strong><?php echo $Nama_Lengkap ?></p>
            <p><strong>Tempat Lahir:</strong><?php echo $Tempat_Lahir ?></p>
            <p><strong>Tanggal Lahir</strong><?php echo $Tanggal_Lahir ?></p>
            <p><strong>Hobi:</strong><?php echo $Hobi ?></p>
            <p><strong>Pasangan:</strong><?php echo $Pasangan ?></p>
            <p><strong>Pekerjaan:</strong><?php echo $Pekerjaan ?></p>
            <p><strong>Nama OrangTua:</strong><?php echo $Nama_OrangTua ?></p>
            <p><strong>Nama Kakak:</strong><?php echo $Nama_Kakak ?></p>
            <p><strong>Nama Adik:</strong><?php echo $Nama_Adik ?></p>
        </section>
        <section id="contact">
            <h2>Kontak Saya</h2>
            <form action="" method="GET">
              <label for="txtNama"><span>Nama:</span>
                <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" >
              </label>
              
              <label for="txtEmail"><span>Email:</span>
                <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan Email">
              </label>
              
              
              <label for="txtPesan"><span>Pesan:</span>
                <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda... " maxlength="500" ></textarea>
                <small id="charCount">0/200 karakter</small>
              </label>
              
              <button type="submit">Kirim</button>
              <button type="reset">Batal</button>
            </form>
            <div id="result"></div>
        </section>
    </main>
    <footer>
        <p>&copy; &#9786; 2025 Salsabilla Agustin 2511500083</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>