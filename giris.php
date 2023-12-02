<?php
require 'ayar.php';

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
        // Giriş başarılı, kullanıcıyı oturumla işaretle veya başka bir işlem yap
        session_start();
        $_SESSION['kadi'] = $user['kadi'];
        header("Location: index.php"); // Giriş yaptıktan sonra yönlendirilecek sayfa
        exit;
    } else {
        header("Location: girishata.php"); // Kullanıcı adı veya şifre hatalı ise girishata.php sayfasına yönlendir
        exit;
    }
}
?>
