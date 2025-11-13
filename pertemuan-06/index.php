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
            <p><strong>Tanggal Lahir:</strong><?php echo $Tanggal_Lahir ?></p>
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


        <section id="ipk">

              <?php
              $namaMatkul1 = "Aloritma dan Struktur Data";
              $namaMatkul2 = "Agama";
              $namaMatkul3 = "Konsep Basis Data";
              $namaMatkul4 = "Wawasan Teknologi Informasi";
              $namaMatkul5 = "Pemrograman Web Dasar";

              $sksMatkul1 = "4";
              $sksMatkul2 = "2";
              $sksMatkul3 = "3";
              $sksMatkul4 = "4";
              $sksMatkul5 = "3";

              $nilaiHadir1 = "90";
              $nilaiHadir2 = "70";
              $nilaiHadir3 = "80";
              $nilaiHadir4 = "75";
              $nilaiHadir5 = "69";

              $nilaiTugas1 = "60";
              $nilaiTugas2 = "50";
              $nilaiTugas3 = "55";
              $nilaiTugas4 = "90";
              $nilaiTugas5 = "80";

              $nilaiUTS1 = "80";
              $nilaiUTS2 = "60";
              $nilaiUTS3 = "85";
              $nilaiUTS4 = "92";
              $nilaiUTS5 = "90";

              $nilaiUAS1 = "70";
              $nilaiUAS2 = "80";
              $nilaiUAS3 = "86";
              $nilaiUAS4 = "70";
              $nilaiUAS5 = "100";

              $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
              $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
              $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
              $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
              $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
              
              $mutu1 = "3.00";
              $mutu2 = "2.70";
              $mutu3 = "3.30";
              $mutu4 = "3.70";
              $mutu5 = "3.70";

              $grade1 = "B";
              $grade2 = "B-";
              $grade3 = "B+";
              $grade4 = "A-";
              $grade5 = "A-";

              $bobot1 = $mutu1 * $sksMatkul1;
              $bobot2 = $mutu2 * $sksMatkul2;
              $bobot3 = $mutu3 * $sksMatkul3;
              $bobot4 = $mutu4 * $sksMatkul4;
              $bobot5 = $mutu5 * $sksMatkul5;

              $status1 = "Lulus";
              $status2 = "Lulus";
              $status3 = "Lulus";
              $status4 = "Lulus";
              $status5 = "Lulus";

              $totalbobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
              $totalsks = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
              $IPK = $totalbobot / $totalsks;
              ?>

              <h2>Nilai Saya</h2>
              <p><strong>Nama Matakuliah ke-1:</strong><?php echo $namaMatkul1 ?></p>
              <p><strong>SKS:</strong><?php echo $sksMatkul1 ?></p>
              <p><strong>Kehadiran:</strong><?php echo $nilaiHadir1 ?></p>
              <p><strong>Tugas:</strong><?php echo $nilaiTugas1 ?></p>
              <p><strong>UTS:</strong><?php echo $nilaiUTS1 ?></p>
              <p><strong>UAS:</strong><?php echo $nilaiUAS1 ?></p>
              <p><strong>Nilai Akhir:</strong><?php echo $nilaiAkhir1 ?></p>
              <p><strong>Grade:</strong><?php echo $grade1 ?></p>
              <p><strong>Angka Mutu:</strong><?php echo $mutu1 ?></p>
              <p><strong>Bobot:</strong><?php echo $bobot1 ?></p>
              <p><strong>Status:</strong><?php echo $status1 ?></p>

              <hr>

              <p><strong>Nama Matakuliah ke-2:</strong><?php echo $namaMatkul2 ?></p>
              <p><strong>SKS:</strong><?php echo $sksMatkul2 ?></p>
              <p><strong>Kehadiran:</strong><?php echo $nilaiHadir2 ?></p>
              <p><strong>Tugas:</strong><?php echo $nilaiTugas2 ?></p>
              <p><strong>UTS:</strong><?php echo $nilaiUTS2 ?></p>
              <p><strong>UAS:</strong><?php echo $nilaiUAS2 ?></p>
              <p><strong>Nilai Akhir:</strong><?php echo $nilaiAkhir2 ?></p>
              <p><strong>Grade:</strong><?php echo $grade2 ?></p>
              <p><strong>Angka Mutu:</strong><?php echo $mutu2 ?></p>
              <p><strong>Bobot:</strong><?php echo $bobot2 ?></p>
              <p><strong>Status:</strong><?php echo $status2 ?></p>

              <hr>

              <p><strong>Nama Matakuliah ke-3:</strong><?php echo $namaMatkul3 ?></p>
              <p><strong>SKS:</strong><?php echo $sksMatkul3 ?></p>
              <p><strong>Kehadiran:</strong><?php echo $nilaiHadir3 ?></p>
              <p><strong>Tugas:</strong><?php echo $nilaiTugas3 ?></p>
              <p><strong>UTS:</strong><?php echo $nilaiUTS3 ?></p>
              <p><strong>UAS:</strong><?php echo $nilaiUAS3 ?></p>
              <p><strong>Nilai Akhir:</strong><?php echo $nilaiAkhir3 ?></p>
              <p><strong>Grade:</strong><?php echo $grade3 ?></p>
              <p><strong>Angka Mutu:</strong><?php echo $mutu3 ?></p>
              <p><strong>Bobot:</strong><?php echo $bobot3 ?></p>
              <p><strong>Status:</strong><?php echo $status3 ?></p>

              <hr>

              <p><strong>Nama Matakuliah ke-4:</strong><?php echo $namaMatkul4 ?></p>
              <p><strong>SKS:</strong><?php echo $sksMatkul4 ?></p>
              <p><strong>Kehadiran:</strong><?php echo $nilaiHadir4 ?></p>
              <p><strong>Tugas:</strong><?php echo $nilaiTugas4 ?></p>
              <p><strong>UTS:</strong><?php echo $nilaiUTS4 ?></p>
              <p><strong>UAS:</strong><?php echo $nilaiUAS4 ?></p>
              <p><strong>Nilai Akhir:</strong><?php echo $nilaiAkhir4 ?></p>
              <p><strong>Grade:</strong><?php echo $grade4 ?></p>
              <p><strong>Angka Mutu:</strong><?php echo $mutu4 ?></p>
              <p><strong>Bobot:</strong><?php echo $bobot4 ?></p>
              <p><strong>Status:</strong><?php echo $status4 ?></p>

              <hr>

              <p><strong>Nama Matakuliah ke-5:</strong><?php echo $namaMatkul5 ?></p>
              <p><strong>SKS:</strong><?php echo $sksMatkul5 ?></p>
              <p><strong>Kehadiran:</strong><?php echo $nilaiHadir5 ?></p>
              <p><strong>Tugas:</strong><?php echo $nilaiTugas5 ?></p>
              <p><strong>UTS:</strong><?php echo $nilaiUTS5 ?></p>
              <p><strong>UAS:</strong><?php echo $nilaiUAS5 ?></p>
              <p><strong>Nilai Akhir:</strong><?php echo $nilaiAkhir5 ?></p>
              <p><strong>Grade:</strong><?php echo $grade5 ?></p>
              <p><strong>Angka Mutu:</strong><?php echo $mutu5 ?></p>
              <p><strong>Bobot:</strong><?php echo $bobot5 ?></p>
              <p><strong>Status:</strong><?php echo $status5 ?></p>

              <hr>

              <p><strong>Total Bobot:</strong><?php echo $totalbobot ?></p>
              <p><strong>Total SKS:</strong><?php echo $totalsks ?></p>
              <p><strong>IPK:</strong><?php echo $IPK ?></p>


        </section>
        

    </main>
    <footer>
        <p>&copy; &#9786; 2025 Salsabilla Agustin 2511500083</p>
    </footer>

    <script src="script.js"></script>
</body> 
</html>