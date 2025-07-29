<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Home</title>
    <link rel="icon" href="pic/logo.png" type="image/x-icon">

    
    <!-- Custom Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    <!-- Custom CSS Link -->
     <link rel="stylesheet" href="css/index.css">
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
                            <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components.php">COMPONENTS</a>
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
    <!-- End Nav Bar -->

    <!-- Start Header Section -->
    <header>       
        <div class="shape" id="shape1" style="--i:1;"></div>
        <div class="shape" id="shape2" style="--i:2;"></div>
        <div class="shape" id="shape3" style="--i:3;"></div>
        <h1 class="heading-text">Water Sense </h1>
        <h2 class="sub-heading">Monitor water levels with IoT technology</h2>
       
        <div class="shape" id="shape4" style="--i:4;"></div>            
    </header>      
    <!-- End Header Section -->

    <div class="parallax-demo">
        <h2 class="hdua"><u>About</u></h2>
        <p style="text-align:justify; center"><b>Water Sense is an IoT-based water level monitoring system that allows 
            users to monitor water conditions in real-time. With sensor technology connected to the internet, 
            the system provides automatic notifications when water levels reach Safe, Alert, or Danger levels.</b></p>
        <p style="text-align:justify; center">
            💡 Fitur Utama:<br>
            ✅ Monitoring real-time melalui web.<br>
            ✅ Visualisasi, grafik, status.<br>
            ✅ Peringatan dini saat ketinggian air naik.<br>
            ✅ Indikator visual & suara (LED & buzzer) untuk setiap level.<br>
            <br>
            🔗 Dengan Web Water Sense, Anda dapat mengantisipasi banjir lebih cepat d
            an mengambil tindakan sebelum terjadi hal yang tidak diinginkan.
            <br>
            📍 Pantau kondisi air kapan saja & di mana saja! 🌊🌍
        </p>
    </div>

<footer class="footer">
    <p>Design by Group B - A114202.</p>
</footer>
    <!-- Start Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="js/script.js"></script>
    <!-- End Script -->
</body>
</html>