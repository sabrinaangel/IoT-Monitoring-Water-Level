<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Tittle-->
    <title>Tools and Materials</title>
    <link rel="icon" href="pic/Components-icon.png" type="image/x-icon">
    
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Xu02Ko8ZcN2MT9Vr4ZyZcmxvNJJ0xyGuL6K8r5g8eTDbFz0OxdhXZhP2VdC0v9ms" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/dashboard.css">   
    <link rel="stylesheet" href="css/tools.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-3xRUW1dq9O/OTuL7B1Cn6V2GavINyJu3i8DN4XAwEosv+GqjleAHhO1qQ9S/S0jE" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- ..................Start Nav Bar................. -->
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
                <ul class="navbar-nav flex-grow-1 ps-3 text-start">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hiw.php">HOW IT WORKS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a href="index.php"><img src="pic/logo.png" alt="Logo" width="45" height="35"></a>
                </div>
            </nav>
        </div>
    </nav>
    <!-- ..................End Navbar Section................ -->
   
    <div>
    <div class="team-section">
        <h2 style="text-align: center;">TOOLS AND MATERIALS</h2>
    </div>
   </div>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="pic/sensor.png" class="sensor-image">
            <div class="kolom">
                <h2>Sensor Ultrasonik</h2>
                <div class="deskripsi">
                    <p>Digunakan untuk mengukur jarak dengan memanfaatkan gelombang suara ultrasonik. Sensor ini
                        mengirimkan gelombang suara dan mengukur waktu yang dibutuhkan untuk gelombang tersebut kembali,
                        sehingga bisa menghitung jarak objek.</p>
                </div>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom-kanan">
                <h2>Resistor</h2>
                <p>Komponen pasif yang digunakan untuk membatasi arus listrik dalam rangkaian. Resistor membantu
                    melindungi komponen lain dari kerusakan akibat arus yang berlebihan.</p>
            </div>
            <img src="pic/resistor.png" class="resistor-image">
        </section>
        <section id="home">
            <img src="pic/esp.png" class="esp-image">
            <div class="kolom">
                <h2>ESP 32</h2>
                <div class="deskripsi">
                    <p>Sebuah mikrokontroler dengan kemampuan Wi-Fi dan Bluetooth. Dapat digunakan untuk berbagai
                        aplikasi IoT (Internet of Things), seperti mengendalikan perangkat atau mengirim data melalui
                        jaringan.</p>
                </div>
            </div>
        </section>
        <section id="courses">
            <div class="kolom-kanan">
                <h2>LED (Light Emitting Diode)</h2>
                <p>Komponen elektronik yang memancarkan cahaya ketika dialiri arus listrik. Biasanya digunakan untuk
                    indikator atau tampilan.</p>
            </div>
            <img src="pic/led.png" class="led-image">
        </section>
        <section id="home">
            <img src="pic/buzzer.png" class="buzzer-image">
            <div class="kolom">
                <h2>Buzzer</h2>
                <div class="deskripsi">
                    <p>Buzzer: Alat yang menghasilkan suara ketika dialiri arus listrik. Digunakan untuk memberikan
                        notifikasi atau peringatan dengan suara.</p>
                </div>
            </div>
        </section>
        <section id="courses">
            <div class="kolom-kanan">
                <h2>LCD (Liquid Crystal Display)</h2>
                <p>LCD Layar tampilan yang digunakan untuk menampilkan informasi. LCD sering digunakan dalam berbagai
                    perangkat untuk menampilkan data atau status.</p>
            </div>
            <img src="pic/lcs.png" class="lcs-image">
        </section>
        <section id="home">
            <img src="pic/braedboard.png" class="breadboard-image">
            <div class="kolom">
                <h2>Breadboard</h2>
                <div class="deskripsi">
                    <p>Papan sirkuit tanpa solder yang digunakan untuk merancang dan menguji rangkaian elektronik. Mudah
                        digunakan untuk prototyping dan eksperimen.</p>
                </div>
            </div>
        </section>
        <section id="courses">
            <div class="kolom-kanan">
                <h2>Jumper</h2>
                <div class="deskripsi-jumper">
                    <p>Kabel fleksibel yang digunakan untuk menghubungkan komponen elektronik pada breadboard atau papan
                        sirkuit. Biasanya digunakan untuk membuat sambungan antar pin atau komponen.</p>
                </div>
            </div>
            <img src="pic/jumper.png" class="jumper-image">
        </section>

    <footer class="footer">
        <p>Design by Group B - A114202.</p>
    </footer>

     <!-- Start Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
    <!-- End Script -->
</body>

</html>