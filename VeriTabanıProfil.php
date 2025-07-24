<?php
// Veritabanı bağlantısı için gerekli bilgiler
$servername = "127.0.0.1";
$database = "rehber_kiralama"; // Veritabanı adı

// MySQL bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen verileri al
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$price = $_POST['price'];
$experience = $_POST['experience'];
$bio = $_POST['bio'];

// Veritabanına veri ekle
$sql = "INSERT INTO rehber_profilleri (name, email, phone, services, price, experience, bio) 
        VALUES ('$name', '$email', '$phone', '$services', '$price', '$experience', '$bio')";

if ($conn->query($sql) === TRUE) {
    echo "Yeni kayıt başarıyla oluşturuldu.";
} else {
    echo "Kayıt oluşturma hatası: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>