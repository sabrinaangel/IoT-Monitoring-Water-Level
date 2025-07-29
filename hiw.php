<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Tittle-->
    <title>HOW IT WORKS</title>
    <link rel="icon" href="pic/logo.png" type="image/x-icon">

    <!-- ..................Custom Bootsrap Link................. -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hiw.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bubble.css">    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Menambahkan jQuery -->
</head>

<body>
    <!-- Start Nav Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components.php">COMPONENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a href="index.html"><img src="pic/logo.png" alt="Logo" width="45" height="35"></a>
                </div>
            </nav>
        </div>
    </nav>
    <!-- End Nav Bar -->
    <div class="panel" data-color="violet">
    <div>
            <h1 style="font-family: 'comic sans ms';">Cara Kerja Sistem Monitoring Ketinggian Air Berbasis IoT</h1>
            <p>🚀 Web Sense bekerja dengan memanfaatkan sensor, mikrokontroler, dan teknologi IoT
                untuk mendeteksi serta memberikan peringatan dini terhadap kenaikan ketinggian air.<br>
                Berikut adalah tahapan cara kerja sistem ini:</p>
        </div>
    </div>
    <div class="panel" data-color="indigo">
    <div>
            <h2 style="font-family: 'comic sans ms'; color: white;">1. Pengukuran Ketinggian Air</h2><br>
            <p style="text-align: justify; color: white;">
                💧 Sensor Ultrasonik, dipasang menghadap ke permukaan air.<br>
                📡 Sensor mengirimkan sinyal ultrasonik ke permukaan air, lalu menangkap pantulannya untuk menghitung jarak (ketinggian air).<br>
                🌡 Semakin tinggi air, semakin dekat pantulan diterima sensor dan jarak ke sensor semakin pendek.
            </p>
        </div>
    </div>
    <div class="panel" data-color="blue">
    <div>
        <h2 style="font-family: 'comic sans ms'; color: white;">2. Pengolahan Data oleh Mikrokontroler</h2><br>
        <p style="text-align: justify; color: white;">
            ⚙️ Mikrokontroler, menerima data dari sensor.<br>
            📥 Data tinggi air diolah dan dibandingkan dengan batas ambang menjadi ketinggian air aktual dalam cm.<br>
            📊 Sistem menentukan status level air:<br>
                ✅ Aman – Air dalam batas normal. (Hijau)<br>
                ⚠️ Waspada – Air mulai naik, perlu diperhatikan. (Kuning)<br>
                🚨 Bahaya – Air mencapai batas maksimum, tindakan segera diperlukan. (Merah)<br>
            ⚙️ Mikrokontroler mengatur:<br>
                - LED indikator (Hijau/Kuning/Merah)<br>
                - Buzzer (bila status “Bahaya”)
        </p>
        </div>
    </div>
    <div class="panel" data-color="green">
    <div>
        <h2 style="font-family: 'comic sans ms'; color: white;">3. Mengirim Data ke Web (IoT)</h2><br>
        <p style="text-align: justify; color: white;">
            📤 Mikrokontroler mengirim data secara real-time ke server web melalui Wi-Fi.<br>
            📡 Data dikirim via HTTP.
        </p>
        </div>
    </div>
    <div class="panel" data-color="yellow">
        <div>
        <h2 style="font-family: 'comic sans ms'; color: white;"> 4. Data Tampil di Web Sense (Dashboard Web)</h2><br>
        <p style="text-align: justify; color: white;">
            💧 Website Web Sense menerima data dari mikrokontroler dan menyimpannya ke dalam database.<br>
            📊 Data ditampilkan di web dashboard dengan:<br>
                - Simulasi visual, yaitu tabung atau gelas yang terisi air.<br>
                - Nilai ketinggian air (cm).<br>
                - Indikator status (Aman, Siaga, Bahaya)<br>
                - Grafik ketinggian air (real-time & historis).<br>
        </p>  
        </div>
    </div>
    <footer class="footer">
        <p>Design by Group B - A114202.</p>
    </footer>

    <!-- Start Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Menghubungkan file JavaScript -->    
        <script src="js/color.js"></script> 
        <script src="js/bubble.js"></script> 
    <!-- End Script -->
</body>

</html>