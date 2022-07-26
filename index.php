<?php
require('include/Init.php');
$title = "Trang chủ";
    $CASE = $_GET['page'];
    switch ($CASE) {
        case '':
            include 'page/layout/Header.php';
            include 'page/Main.php';
            include ('page/layout/Footer.php');
            break;
        case 'login':
            if($user){ // đã đăng nhập thì chuyển hướng
                echo '<meta http-equiv="refresh" content="0 ;url=/">'; 
                die();
            }
            $title = "Login";
            include 'page/Authenticate/Login.php';
            break;
        case 'register':
            if($user){ // đã đăng nhập thì chuyển hướng
                $session->destroy();
            }
            $title = "Register";
            include 'page/Authenticate/Register.php';
            break;
        case 'logout':
            $title = "Logout";
            $session->destroy();
            echo '<meta http-equiv="refresh" content="1;url=/">';
            header("Location:/");
            break;
        case 'function':
            $title = "Function";
            include 'page/layout/Header.php';
            include 'page/blog/Function.php';
            include ('page/layout/Footer.php');
            break;
        case 'singleblog':
            $title = "Single Blog";
            include 'page/layout/Header.php';
            include 'page/blog/SingleBlog.php';
            include ('page/layout/Footer.php');
            break;
        case 'category':
            $title = "Category";
            // include 'page/layout/Header.php';
            include 'page/blog/index.php';
            include ('page/layout/Footer.php');
            break;

        default: // trang chu
            include 'page/layout/Header.php';
            include 'page/layout/NotFound.php';
            break;
    }
    
    


