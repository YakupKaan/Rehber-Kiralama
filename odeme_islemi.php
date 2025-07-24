<?php
// Seçilen ödeme yöntemini al
$odeme_yontemi = $_POST['odeme_yontemi'];

// Seçilen ödeme yöntemine göre işlem yap
switch ($odeme_yontemi) {
    case 'kredi_karti':
        // Kredi kartı işlemleri
        echo "Kredi kartı ödeme işlemi başarıyla tamamlandı.";
        break;
    case 'banka_havale':
        // Banka havale işlemleri
        echo "Banka havale ödeme işlemi başarıyla tamamlandı.";
        break;
    default:
        echo "Geçersiz ödeme yöntemi.";
}
?>
