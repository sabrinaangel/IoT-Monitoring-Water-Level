// Fungsi untuk memperbarui ketinggian air
function updateWaterLevel(newLevel) {
    const cupHeight = 330; 
    const maxLevel = 100; 
    const percentage = (newLevel / maxLevel) * 100; 
  
    // Update tampilan ketinggian air
    document.getElementById('liters').innerText = newLevel + ' cm';
    document.getElementById('currentLevel').innerText = newLevel;
  
  // Fungsi untuk memperbarui ketinggian air
  function updateWaterLevel(newLevel) {
      const cupHeight = 330; 
      const maxLevel = 100; 
      const percentage = (newLevel / maxLevel) * 100; 
    
      // Update tampilan ketinggian air
      document.getElementById('liters').innerText = newLevel + ' cm';
      document.getElementById('currentLevel').innerText = newLevel;
    
      // Update tinggi elemen percentage
      const percentageElement = document.getElementById('percentage');
      percentageElement.style.height = percentage + '%';
    
      let statusText = "Aman";  
  
      if (newLevel >= 30 && newLevel < 70) {
      statusText = "Siaga";
      } else if (newLevel >= 70) {
      statusText = "Waspada";
      }
  
  document.getElementById("statusLevel").textContent = statusText;
  
    
      document.getElementById('statusLevel').innerText = statusText;
    }
    
  
    // Update tinggi elemen percentagepercentage
    const percentageElement = document.getElementById('percentage');
    percentageElement.style.height = percentage + '%'; // Set tinggi berdasarkan persentase
  }
  
  // Simulasi pengambilan data dari sensor IoT
  setInterval(() => {
    const simulatedWaterLevel = Math.floor(Math.random() * 101); // Simulasi data ketinggian air (0-100 cm)
    updateWaterLevel(simulatedWaterLevel);
  }, 5000); // Update setiap 5 detik
  
  
  // Ambil konteks dari elemen canvas
  const ctx = document.getElementById('waterLevelChart').getContext('2d');
  // Buat grafik
  const waterLevelChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [new Date()], // Label waktu
          datasets: [{
              label: 'Water Level  (cm)',
              data: [], // Data ketinggian air
              borderColor: 'rgba(54, 162, 235, 1)',
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              fill: true,
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true,
                  title: {
                      display: true,
                      text: 'Water Level (cm)'
                  }
              },
              x: {
                  title: {
                      display: true,
                      text: 'Time'
                  }
              }
          }
      }
  });
  
  // Fungsi untuk memperbarui grafik dan nilai ketinggian air
  function updateWaterLevel(newLevel) {
      const currentTime = new Date().toLocaleTimeString();
  
      // Tambahkan data baru ke grafik
      waterLevelChart.data.labels.push(currentTime);
      waterLevelChart.data.datasets[0].data.push(newLevel);
      
      // Update nilai ketinggian air di tampilan
      document.getElementById('levelValue').innerText = newLevel;
  
      // Batasi jumlah data yang ditampilkan
      if (waterLevelChart.data.labels.length > 10) {
          waterLevelChart.data.labels.shift();
          waterLevelChart.data.datasets[0].data.shift();
      }
  
      waterLevelChart.update();
  }
  
  // Simulasi pengambilan data dari sensor IoT
  setInterval(() => {
      const simulatedWaterLevel = Math.floor(Math.random() * 100); 
      updateWaterLevel(simulatedWaterLevel);
  }, 5000); // Update setiap 5 detik