<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Tittle-->
    <title>Dashboard</title>
    <link rel="icon" href="pic/Dashboard-icon.png" type="image/x-icon">

    <!-- ..................Custom Bootsrap Link................. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <!-- Custom CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    
    <!-- Style Tabung -->
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fa;
            margin: 0; /* ini penting! */
            padding: 0;
            text-align: center;
        }
 
        .status-box {
            margin: 0px auto;         /* Ini yang bikin tengah */
            background-color:rgba(54, 110, 184, 0.45); /* Contoh warna background */
            font-size: 30px;    /* Ukuran teks */            
            margin-bottom: 10px;
            width: fit-content; /* Atur box mengikuti panjang teks */
            padding: 5px 10px;  /* Atur padding biar lebih kecil */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .cup {
            width: 150px;
            height: 300px;
            border: 5px solid #3498db;
            border-radius: 20px;
            margin: 0 auto 20px;
            position: relative;
            background-color: #ecf0f1;
        }

        .air {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #3498db;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 0 0 20px 20px;
            font-weight: bold;
        }

        .chart-container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-container {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background-color: #2980b9;
            color: white;
        }
    </style>
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
    <!-- ..................End Navbar Section................ -->
    <div class="status-box" id="statusBox" style="margin-top: 20px;   font-weight: bold;">
        STATUS: Loading...
    </div>

    <div class="cup">
        <div class="air" id="air" style="height: 0%; color: black;" >
            0%
        </div>
    </div>

    <div class="btn-container">
        <button onclick="fetchRealtime()">Realtime</button>
        <button onclick="fetchHistory('weekly')">Mingguan</button>
        <button onclick="fetchHistory('monthly')">Bulanan</button>
    </div>

    <div class="chart-container">
        <h3>Grafik Ketinggian Sensor</h3>
        <canvas id="myChart"></canvas>
    </div>


    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const maxDataPoints = 10;

        let myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Ketinggian (cm)',
                    data: [],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)',
                    borderColor: 'rgba(41, 128, 185, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: 'rgba(41, 128, 185, 1)',
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 20,
                        reverse: true,
                        title: {
                            display: true,
                            text: 'Ketinggian (cm)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });

        function updateStatusBox(data) {
            const statusBox = document.getElementById('statusBox');
            statusBox.innerHTML = 'STATUS: ' + data.status;
            statusBox.style.backgroundColor =
                data.status === 'BAHAYA' ? '#e74c3c' :
                data.status === 'SIAGA' ? '#f1c40f' : '#2ecc71';
        }

        function updateCup(data) {
            const tinggiMax = 20;
            const tinggiAir = tinggiMax - data.ketinggian;
            const persenAir = (tinggiAir / tinggiMax) * 100;

            const air = document.getElementById('air');
            air.style.height = `${persenAir}%`;
            air.innerHTML = `${persenAir.toFixed(1)}%<br>${(tinggiAir / 100).toFixed(2)} m`;
        }

        function updateChart(data) {
            const labels = myChart.data.labels;
            const values = myChart.data.datasets[0].data;

            labels.push(new Date(data.timestamp).toLocaleTimeString());
            values.push(data.ketinggian);

            if (labels.length > maxDataPoints) {
                labels.shift();
                values.shift();
            }

            myChart.update();
        }

        async function fetchRealtime() {
            try {
                const res = await fetch('http://192.168.18.113/sensor');
                const data = await res.json();

                data.timestamp = new Date().toISOString();
                saveToLocalHistory(data);

                updateStatusBox(data);
                updateCup(data);
                updateChart(data);
            } catch (err) {
                console.error("Gagal ambil data realtime:", err);
            }
        }

        function saveToLocalHistory(data) {
            const historyKey = 'sensorHistory';
            let history = JSON.parse(localStorage.getItem(historyKey)) || [];

            const newEntry = {
                ...data,
                timestamp: new Date().toISOString()
            };

            history.push(newEntry);
            localStorage.setItem(historyKey, JSON.stringify(history));
        }

        function getHistoryData(type) {
            const historyKey = 'sensorHistory';
            const history = JSON.parse(localStorage.getItem(historyKey)) || [];
            const now = new Date();
            const days = type === 'weekly' ? 7 : 30;

            const filtered = history.filter(entry => {
                const entryTime = new Date(entry.timestamp);
                return entryTime >= new Date(now.getTime() - days * 24 * 60 * 60 * 1000);
            });

            return filtered;
        }

        function groupByDay(data) {
            const grouped = {};

            data.forEach(item => {
                const day = new Date(item.timestamp).toISOString().split('T')[0]; // format YYYY-MM-DD
                if (!grouped[day]) {
                    grouped[day] = {
                        total: 0,
                        count: 0
                    };
                }
                grouped[day].total += item.ketinggian;
                grouped[day].count++;
            });

            return Object.entries(grouped).map(([day, {
                total,
                count
            }]) => ({
                day,
                avg: total / count
            }));
        }

        function fetchHistory(type) {
            const rawData = getHistoryData(type);
            const grouped = groupByDay(rawData);

            const labels = grouped.map(d => d.day);
            const values = grouped.map(d => d.avg);

            myChart.data.labels = labels;
            myChart.data.datasets[0].data = values;
            myChart.update();
        }

        // Jalankan realtime pertama kali dan refresh setiap 5 detik
        fetchRealtime();
        setInterval(fetchRealtime, 5000);
    </script>
   <!-- Start Script -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>