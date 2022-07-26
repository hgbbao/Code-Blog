<?php
include "../../../include/Init.php";
include "../../../page/layout/Header.php";
// $check_admin = $db->fetch_assoc("SELECT * FROM `account` WHERE `Username`= '$user'",1);
// if($check_admin != 1){ // đã đăng nhập thì chuyển hướng
//     echo '<script>alert("qq ne")</script>;';
//     echo '<meta http-equiv="refresh" content="1 ;url=/">'; 
//     die();
// }

$sql = "SELECT * FROM `accounts` where Username='$user'";

foreach($db->fetch_assoc($sql, 0) as $row) {
    echo "".$row['Username']." ".$row['Level']."";
    echo'<br/>';
}
?>
<body>
    
</body>
<?php
include "../../../page/layout/Footer.php";
?>