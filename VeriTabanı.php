<?php
// Veritabanı bağlantısı
$serverName = "serverName";
$connectionOptions = array(
    "Database" => "databaseName",
    "Uid" => "username",
    "PWD" => "password"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

// POST verilerini al
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];

// Veritabanına ekleme işlemi
$sql = "INSERT INTO TableName (FullName, Email, Password) VALUES (?, ?, ?)";
$params = array($fullName, $email, $password);
$stmt = sqlsrv_query($conn, $sql, $params);

// Hata kontrolü
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo json_encode(array("success" => "Kayıt başarıyla tamamlandı."));
}

// Bağlantıyı kapat
sqlsrv_close($conn);
?>


<?php
// Veritabanı bağlantısı
$serverName = "serverName";
$connectionOptions = array(
    "Database" => "databaseName",
    "Uid" => "username",
    "PWD" => "password"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

// POST verilerini al
$username = $_POST['loginUsername'];
$password = $_POST['loginPassword'];

// Kullanıcı doğrulama
$sql = "SELECT * FROM TableName WHERE Username = ? AND Password = ?";
$params = array($username, $password);
$stmt = sqlsrv_query($conn, $sql, $params);

// Hata kontrolü
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Kullanıcı bulunduysa başarılı mesaj döndür
if (sqlsrv_has_rows($stmt)) {
    echo json_encode(array("success" => "Giriş başarılı."));
} else {
    echo json_encode(array("error" => "Kullanıcı adı veya şifre hatalı."));
}

// Bağlantıyı kapat
sqlsrv_close($conn);
?>
