// Menghubungkan ESP32 dengan PHP Script
// Modifikasi bagian pengiriman data di kode ESP32 untuk mengirimkan data ke script PHP://


// Mengirim data jarak ke PHP script
if (conn.connected()) {
    String url = "http://YOUR_SERVER_IP/your_script.php?distance=" + String(distance);
    WiFiClient client;
    HTTPClient http;
    http.begin(client, url);
    int httpResponseCode = http.GET();
    if (httpResponseCode > 0) {
        String response = http.getString();
        Serial.println(response);
    } else {
        Serial.println("Error on HTTP request");
    }
    http.end();
}