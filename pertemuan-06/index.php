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
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $namaMatkul1 = $_POST['namaMatkul1'];
          $namaMatkul2 = $_POST['namaMatkul2'];
          $namaMatkul3 = $_POST['namaMatkul3'];
          $namaMatkul4 = $_POST['namaMatkul4'];
          $namaMatkul5 = $_POST['namaMatkul5'];

          $sksMatkul1 = $_POST['sksMatkul1'];
          $sksMatkul2 = $_POST['sksMatkul2'];
          $sksMatkul3 = $_POST['sksMatkul3'];
          $sksMatkul4 = $_POST['sksMatkul4'];
          $sksMatkul5 = $_POST['sksMatkul5'];

          $nilaiHadir1 = $_POST['nilaiHadir1'];
          $nilaiHadir2 = $_POST['nilaiHadir2'];
          $nilaiHadir3 = $_POST['nilaiHadir3'];
          $nilaiHadir4 = $_POST['nilaiHadir4'];
          $nilaiHadir5 = $_POST['nilaiHadir5'];

          $nilaiTugas1 = $_POST['nilaiTugas1'];
          $nilaiTugas2 = $_POST['nilaiTugas2'];
          $nilaiTugas3 = $_POST['nilaiTugas3'];
          $nilaiTugas4 = $_POST['nilaiTugas4'];
          $nilaiTugas5 = $_POST['nilaiTugas5'];

          $nilaiUTS1 = $_POST['nilaiUTS1'];
          $nilaiUTS2 = $_POST['nilaiUTS2'];
          $nilaiUTS3 = $_POST['nilaiUTS3'];
          $nilaiUTS4 = $_POST['nilaiUTS4'];
          $nilaiUTS5 = $_POST['nilaiUTS5'];

          $nilaiUAS1 = $_POST['nilaiUAS1'];
          $nilaiUAS2 = $_POST['nilaiUAS2'];
          $nilaiUAS3 = $_POST['nilaiUAS3'];
          $nilaiUAS4 = $_POST['nilaiUAS4'];
          $nilaiUAS5 = $_POST['nilaiUAS5'];

        }
        ?>
        
        <section id="ipk">
           <h2>Nilai Saya</h2>
              <?php
              function getGrade($nilaiAkhir, $nilaiHadir) {
                if ($nilaiHadir < 70) return "E";

                if ($nilaiAkhir >= 91) return "A";
                else if ($nilaiAkhir >= 81) return "A-";
                else if ($nilaiAkhir >= 76) return "B+";
                else if ($nilaiAkhir >= 71) return "B";
                else if ($nilaiAkhir >= 66) return "B-";
                else if ($nilaiAkhir >= 61) return "C+";
                else if ($nilaiAkhir >= 56) return "C";
                else if ($nilaiAkhir >= 51) return "C-";
                else if ($nilaiAkhir >= 36) return "D";
                else return "E";
              }

              function getMutu($grade) {
                switch($grade) {
                  case "A": return 4.00;
                  case "A-": return 3.70;
                  case "B+": return 3.30;
                  case "B": return 3.00;
                  case "B-": return 2.70;
                  case "C+": return 2.30;
                  case "C": return 2.00;
                  case "C-": return 1.70;
                  case "D": return 1.00;
                  default: return 0.00;
                }
              }

              function getStatus($grade) {
                return ($grade == "D" || $grade == "E") ? "GAGAL" : "LULUS";
              }

              for ($i = 1; $i <= 5; $i++) {
                ${"nilaiAkhir$i"} = (0.1 * ${"nilaiHadir$i"}) + (0.2 * ${"nilaiTugas$i"}) + (0.3 * ${"nilaiUTS$i"}) + (0.4 * ${"nilaiUAS$i"});
                ${"grade$i"} = getGrade(${"nilaiAkhir$i"}, ${"nilaiHadir$i"});
                ${"mutu$i"} = getMutu(${"grade$i"});
                ${"bobot$i"} = ${"mutu$i"} * ${"sksMatkul$i"};
                ${"status$i"} = getStatus(${"grade$i"});
              }

              $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
              $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
              $IPK = $totalBobot / $totalSKS;
              ?>

            <table border="1" cellpadding="8" cellspacing="0">
              <tr>
                <th align="right">Mata Kuliah</th>
                <th align="left">SKS - Nilai Akhir | Grade | Mutu | Bobot | Status</th>
              </tr>

              <?php for ($i = 1; $i <= 5; $i++): ?>
              <tr>
                <td align="right"><?= ${"namaMatkul$i"} ?></td>
                <td align="left">
                  <?= ${"sksMatkul$i"} ?> SKS |
                  <?= round(${"nilaiAkhir$i"}, 2) ?> |
                  <?= ${"grade$i"} ?> |
                  <?= number_format(${"mutu$i"}, 2) ?> |
                  <?= number_format(${"bobot$i"}, 2) ?> |
                  <?= ${"status$i"} ?>
                </td>
              </tr>
              <?php endfor; ?>
            </table>

            <br>

            <table>
              <tr>
                <td align="right"><b>Total SKS</b></td>
                <td align="left">: <?= $totalSKS ?></td>
              </tr>
              <tr>
                <td align="right"><b>Total Bobot</b></td>
                <td align="left">: <?= number_format($totalBobot, 2) ?></td>
              </tr>
              <tr>
                <td align="right"><b>IPK</b></td>
                <td align="left">: <?= number_format($IPK, 2) ?></td>
              </tr>
            </table>
        </section>
        

    </main>
    <footer>
        <p>&copy; &#9786; 2025 Salsabilla Agustin 2511500083</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>