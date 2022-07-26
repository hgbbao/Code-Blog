<?php
// error_reporting(0);
@session_start();
require_once('Config.php');
require_once('Functions.php');
require_once('Session.php');

// kết nối database
$db = new DB();
$db->connect();
$db->set_char('utf8mb4');

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = date("Y-m-d H:i:s");


// Khi to session
$session = new Session();
$session->start();

// Kim tra session
if ($session->get() != '') {
    $user = $session->get(); // nes8uu cos
} else {
    $user = ''; // khoong cos
}

// Nếu Đăng Nhập
if ($user) {
    // Lấy Dữ Liệu Tài Khoản
    $sql_get_data_user = "SELECT * FROM accounts WHERE `username` = '$user'";
    if ($db->num_rows($sql_get_data_user)) {
        $data_user = $db->fetch_assoc($sql_get_data_user, 1);
    }
}

?>
<script>
    console.log("Init Success")
</script>

