<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Tittle-->
    <title>About Us</title>
    <link rel="icon" href="pic/About-icon.png" type="image/x-icon">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/foto.css">
    <link rel="stylesheet" href="css/bubble.css">
</head>

<body style="background-color: cornflowerblue;">
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
                            <a class="nav-link" href="components.php">COMPONENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hiw.php">HOW IT WORKS</a>
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
    

    <div class="team-section">
        <h2>TEAM</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="pic/farel.jpg" alt="Ketua">
                <p>FIFARRELL NAUFAL A.</p>
                <p>A11.2024.15604</p>
            </div>
            <div class="team-member">
                <img src="pic/radit.jpg" alt="Wakil ketua">
                <p>ILHAM HAFIISH WIBOWO</p>
                <p>A11.2024.15607</p>
            </div>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <img src="pic/lili.png" alt="Anggota">
                <p>LAILY MUTHIA NABIL MANAN</p>
                <p>A11.2024.15618</p>
            </div>
            <div class="team-member">
                <img src="pic/rafania.png" alt="Anggota">
                <p>RAFANIA PUTRI MAHENDRA</p>
                <p>A11.2024.15609</p>
            </div>
            <div class="team-member">
                <img src="pic/nadin.png" alt="Anggota">
                <p>NADINTA ALQISYA</p>
                <p>A11.2024.15606</p>
            </div>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <img src="pic/luna.jpg" alt="Bendahara">
                <p>BUNGALUNNA NASHUHA CAMELIA</p>
                <p>A11.2024.15611</p>
            </div>
            <div class="team-member">
                <img src="pic/bina.jpg" alt="Anggota">
                <p>SABRINA ANGEL LILGA PUTRI MAHARANI</p>
                <p>A11.2024.15596</p>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-between"> <!-- Menggunakan d-flex dan flex-column -->
                    <div>
                        <h5>Contact Us</h5>
                        <p>Email: info@udinus.com</p>
                        <p>Phone: +62 123 456 7890</p>
                    </div>

                    <div>
                        <h5>Follow Us</h5>
                        <div>
                            <a href="https://facebook.com" target="_blank" class="me-3">
                                <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" alt="Facebook" width="30">
                            </a>
                            <a href="https://twitter.com" target="_blank" class="me-3">
                                <img src="https://img.icons8.com/ios-filled/50/ffffff/twitter-squared.png" alt="Twitter" width="30">
                            </a>
                            <a href="https://instagram.com" target="_blank">
                                <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram" width="30">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Our Location</h5>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.225673823456!2d110.40648567454183!3d-6.982674068378363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas%20Dian%20Nuswantoro!5e0!3m2!1sen!2sid!4v1742190571507!5m2!1sen!2sid"
                            width="100%"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            <p class="mb-0">Design by Group B - A114202.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/bubble.js"></script>
    <script>
        // Inisialisasi efek gelembung
        var bubble = new Bubble('body', {
            colors: [{
                bubbleColor: 'rgba(255, 255, 255, 0.5)',
                bubbleSize: 20,
            }],
            delay: 200,
        });
    </script>
</body>

</html>