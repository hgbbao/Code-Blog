<?php
require('../../include/Init.php');
$func = $_GET['func'];
$message = "";

switch ($func) {
    case 'login':       
        $email = $db->db_escape(htmlspecialchars($_POST['email'])); 
        $password = $db->db_escape(htmlspecialchars($_POST['password']));
        $check  = $db->num_rows("SELECT Username FROM accounts WHERE `Email` = '$email' AND `Password` = '".md5($password)."'");
         /// Check rỗng
            if(empty($email) || empty($password)){
                $message = "Vui lòng nhập đầy đủ thông tin";
            }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { /// Check đúng định dạng 
                $message = "Email không đúng định dạng";
            }else if($check == 0){  // đăng nhập thất bại
                $message = "Sai Email hoặc mật khẩu";
            }else{
                $message = "Đăng nhập thành công";
                $user = $db->fetch_assoc("SELECT Username FROM accounts WHERE `Email` = '$email' AND `Password` = '".md5($password)."'", 1);
                $session->send($user['Username']);//lưu session 
                echo '<meta http-equiv="refresh" content="2;url=index.php">';
                echo $message;
                exit();
            }
            echo $message;
        break;
    case 'register':
        $email = $db->db_escape(htmlspecialchars($_POST['email'])); 
        $username= $db->db_escape(htmlspecialchars($_POST['username']));
        $password = $db->db_escape(htmlspecialchars($_POST['password']));
        $repassword = $db->db_escape(htmlspecialchars($_POST['repassword']));

        $checkregister= $db->num_rows("SELECT `Email` FROM `accounts` WHERE `Email`='$email'");
         
            if ( empty($email) || empty($username) ||empty($password) || empty($password) ){
                $message = "Vui lòng nhập đầy đủ thông tin"; echo 'sadasdasdasdasdsa';  
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){                    
                $message="Email không đúng định dạng";
            }elseif ($checkregister > 0){
                $message="Email đã được đăng kí"; 
            }elseif ($repassword != $password){
                $message="Mật khẩu không trùng khớp";
            }else{
                $password=md5($password);
                $repassword=md5($repassword);
                $db->query("INSERT INTO `accounts`(`Username`,`Password`,`Email`) VALUES ('$username','$password','$email') ");
                $message="Đăng kí thành công";
            }

            // if ( empty($email) || empty($username) ||empty($password) || empty($password) ){
            //     $message = "Vui lòng nhập đầy đủ thông tin";   
            //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)){                    
            //         $message="Email không đúng định dạng";
            //     }
            //     else{
            //         if ($checkregister > 0){
            //             $message="Email đã được đăng kí";
            //         }
            //         else{
            //             $password=md5($password);
            //             $repassword=md5($repassword);
            //         }
            //         if ($repassword == $password){
            //             $message="Đăng kí thành công";
            //             $db->query("INSERT INTO `accounts`(`Username`,`Password`,`Email`) VALUES ('$username','$password','$email') ");
            //         }
            //         else{
            //             $message="Mật khẩu không trùng khớp";
            //         }
            //     }
            // }

        break;
    case 'logout':
            $session->destroy();
            echo '<meta http-equiv="refresh" content="1;url=/">';
            header("Location:/");
            
        break;

    default: // trang chu
        echo '403 message';
        break;
}