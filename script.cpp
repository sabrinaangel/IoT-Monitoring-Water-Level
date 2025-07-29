// kode arduino ide 


#include <Wire.h>
#include <LiquidCrystal_PCF8574.h>
#include <WiFi.h> // Include the WiFi library
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>

// Definisikan pin untuk sensor ultrasonik
#define trigPin 5
#define echoPin 17

// Definisikan pin untuk LED dan buzzer
int ledAman = 16;
int ledSiaga = 4;
int ledBahaya = 19;
int buzzer = 15;

// Inisialisasi LCD dengan alamat I2C 0x27 (sesuaikan jika berbeda)
LiquidCrystal_PCF8574 lcd(0x27); // Ganti 0x27 dengan alamat I2C yang sesuai jika perlu

float duration, distance;

// Ganti dengan SSID dan Password Wi-Fi Anda
const char* ssid = "c1 BIZNET"; 
const char* password = "2024sofillaili"; 

// Ganti dengan alamat IP server MySQL Anda
IPAddress server_addr(192, 168, 1, 100); // Ganti dengan IP server MySQL Anda
char user[] = ""; // Username, kosongkan jika tidak ada
char passwordDB[] = ""; // Password, kosongkan jika tidak ada

// Inisialisasi koneksi MySQL
WiFiClient client;
MySQL_Connection conn((Client *)&client);

void setup() {
  Serial.begin(115200);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(ledAman, OUTPUT);
  pinMode(ledSiaga, OUTPUT);
  pinMode(ledBahaya, OUTPUT);
  pinMode(buzzer, OUTPUT);

  // Inisialisasi LCD
  lcd.begin(16, 2); // Menentukan ukuran LCD (16 kolom, 2 baris)
  lcd.setBacklight(HIGH); // Menyalakan backlight LCD

  // Menghubungkan ke Wi-Fi
  WiFi.begin(ssid, password);
  Serial.print("Menghubungkan ke WiFi");
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print(".");
  }
  
  Serial.println();
  Serial.print("Terhubung ke WiFi dengan IP: ");
  Serial.println(WiFi.localIP()); // Menampilkan alamat IP yang didapat

  // Menghubungkan ke database MySQL
  if (conn.connect(server_addr, 3306, user, passwordDB)) {
    Serial.println("Koneksi ke database berhasil.");
  } else {
    Serial.println("Koneksi ke database gagal.");
  }
}

void loop() {
  // Menghitung jarak menggunakan sensor ultrasonik
  digitalWrite(trigPin, LOW);  
  delayMicroseconds(2);  
  digitalWrite(trigPin, HIGH);  
  delayMicroseconds(10);  
  digitalWrite(trigPin, LOW);  
  
  duration = pulseIn(echoPin, HIGH); 
  distance = (duration * 0.034) / 2;

  // Batasi jarak maksimum yang terdeteksi
  if (distance > 20) {
    distance = 20; // Set jarak maksimum menjadi 20 cm
  }

  // Menampilkan jarak pada LCD
  lcd.setCursor(0, 0);
  lcd.print("Jarak: ");
  lcd.print(distance);
  lcd.print(" cm  "); // Spasi tambahan untuk menghapus karakter sebelumnya

  // Mengatur jarak deteksi
  if (distance > 8) { // Status: AMAN
    digitalWrite(ledAman, HIGH);
    digitalWrite(ledSiaga, LOW);
    digitalWrite(ledBahaya, LOW);
    lcd.setCursor(0, 1);
    lcd.print("Status: Aman   "); // Menampilkan status aman
  } else if (distance > 5 && distance <= 8) { // Status: SIAGA!
    digitalWrite(ledSiaga, HIGH);
    digitalWrite(ledAman, LOW);
    digitalWrite(ledBahaya, LOW);
        lcd.setCursor(0, 1);
        lcd.print("Status: Siaga  "); // Menampilkan status siaga
      } else if (distance <= 5) { // Status: BAHAYA!!
        digitalWrite(ledBahaya, HIGH);
        digitalWrite(ledSiaga, LOW);
        digitalWrite(ledAman, LOW);
        lcd.setCursor(0, 1);
        lcd.print("Status: Bahaya!"); // Menampilkan status bahaya
    
        // Menggunakan frekuensi yang lebih tinggi untuk suara buzzer
        tone(buzzer, 1500); // Frekuensi 1500 Hz
        delay(700);
        noTone(buzzer);
        delay(500);
      }
    
      // Mengirim data jarak ke database
      if (conn.connected()) {
        String query = "INSERT INTO sensor_data (distance) VALUES (" + String(distance) + ")";
        MySQL_Cursor cur = MySQL_Cursor(&conn);
        cur.execute(query);
        Serial.println("Data jarak terkirim: " + String(distance) + " cm");
      } else {
        Serial.println("Koneksi ke database terputus.");
      }
    
      // Tambahkan sedikit delay untuk stabilitas
      delay(100);
    }