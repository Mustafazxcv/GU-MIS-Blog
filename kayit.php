<?php
require 'ayar.php';

if (isset($_POST['kayit'])) {
    $kadi = $_POST['kadi'];
    $eposta = $_POST['eposta'];
    $sifre = $_POST['sifre'];
    $sifret = $_POST['sifret'];

    // Kullanıcı adı ve e-posta adresinin benzersizliğini kontrol et
    $sql_check_username = "SELECT * FROM uyeler WHERE kadi = ?";
    $stmt_check_username = $db->prepare($sql_check_username);
    $stmt_check_username->execute([$kadi]);

    $sql_check_email = "SELECT * FROM uyeler WHERE eposta = ?";
    $stmt_check_email = $db->prepare($sql_check_email);
    $stmt_check_email->execute([$eposta]);

    if ($stmt_check_username->rowCount() > 0) {
        header("Location: kayithata.php"); // Kullanıcı adı zaten kullanılıyor
        exit;
    } elseif ($stmt_check_email->rowCount() > 0) {
        header("Location: kayithata.php"); // E-posta adresi zaten kullanılıyor
        exit;
    } else {
        // Şifrelerin eşleşip eşleşmediğini kontrol et
        if ($sifre != $sifret) {
            header("Location: sifrehata.php"); // Şifreler eşleşmiyor
            exit;
        } else {
            // Şifreyi hashleme
            $hashed_password = password_hash($sifre, PASSWORD_DEFAULT);

            // Kullanıcıyı veritabanına ekleme
            $sql = "INSERT INTO uyeler (kadi, eposta, sifre) VALUES (?, ?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->execute([$kadi, $eposta, $hashed_password]);

            if ($stmt) {
                echo "Kayıt başarılı!";
                header("Location: girisyap.php"); // Başarılı kayıt olduğunda kullanıcıyı giriş sayfasına yönlendir
                exit;
            } else {
                header("Location: kayithata.php"); // Hata durumunda kullanıcıyı kayithata.php sayfasına yönlendir
                exit;
            }
        }
    }
}

session_start();

if (isset($_POST['giris'])) {
    $kadi = $_POST['kadi'];
    $sifre = $_POST['sifre'];

    // Kullanıcıyı veritabanından sorgula
    $sql = "SELECT * FROM uyeler WHERE kadi = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$kadi]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kullanıcıyı kontrol et
    if ($user && password_verify($sifre, $user['sifre'])) {
        // Giriş başarılı, kullanıcıyı oturumla işaretle
        $_SESSION['kadi'] = $user['kadi'];
        header("Location: index.php"); // Giriş yaptıktan sonra yönlendirilecek sayfa
        exit;
    } else {
        echo "Kullanıcı adı veya şifre hatalı.";
    }
}
?>

